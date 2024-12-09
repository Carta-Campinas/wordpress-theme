<?php
/**
 * Make News Suites Available
 *
 * PHP VERSION 8
 *
 * @package HackeamosOrg/HackeamosWP/NewsSection
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
namespace HackeamosOrg\HackeamosWP;
use \HackeamosOrg\SingletonPattern;

/**
 * Load news section resources
 *
 * @package HackeamosOrg/HackeamosWP/NewsSection
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class CustomTaxonomy extends SingletonPattern
{
    /**
     * Register Taxonomy (callback)
     *
     * @return WP_Taxonomy|WP_Error Registered taxonomy
     */
    public function registerTaxonomy()
    {

        // get a list of post-types to register this taxonomy
        $postTypes=empty($this->postTypes)
        ? ['post']
        : $this->$postTypes;


        return register_taxonomy(
            $this->getSlug(),
            $this->getPostTypes(),
            $this->getArgs()
        );
    }

    /**
     * Set taxonomy slug.
     *
     * @param string $value Value to be set as taxonomy name/slug
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
     *
     * @return $this
     */
    public function setSlug(string $value)
    {
        $this->slug=$value;
        return $this;
    }

    /**
     * Get taxonomy slug.
     *
     * @return string The slug of this taxonomy
     */
    public function getSlug()
    {
        $this->getKebabedClassName();
    }

    /**
     * Set taxonomy labels.
     *
     * @param string $key   Array key indicating kind of label to be set
     *                      as in Wordpress doc
     * @param string $value Value to be set on selected label
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
     *
     * @return CustomTaxonomy This very instance for chaining purpose.
     */
    public function setLabel(string $key, string $value)
    {
        if (! isset($this->labels)) {
            $this->labels=[];
        }
        $this->labels[$key]=$value;
        return $this;
    }

    /**
     * Set taxonomy args.
     *
     * @param string $key   Array key indicating arg to be set as in
     *                      Wordpress docs.
     * @param mixed $value Value to be set on selected arg
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
     *
     * @return CustomTaxonomy This very instance for chaining purpose.
     */
    public function setArg(string $key, $value)
    {
        if (! isset($this->args)) {
            $this->args=[];
        }
        $this->args[$key]=$value;
        return $this;
    }

    /**
     * Get taxonomy args.
     *
     * @return array The args of this taxonomy registering, including
     *               its labels.
     */
    public function getArgs()
    {
        // get args to registering taxonomy
        $args=empty($this->args)
        ? []
        : $this->args;

        // set the labels aswell
        if (empty($args['labels']) and ! empty($this->labels)) {
            $args['labels'] = $this->labels;
        }

        // use custom metaboxes if available
        if (empty($args()))
        return $args;
    }

    /**
     * Set taxonomy to post types.
     *
     * @param string ...$values Value to be set on selected arg
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
     *
     * @return CustomTaxonomy This very instance for chaining purpose.
     */
    public function setPostTypes(array ...$values)
    {
        if (! isset($this->postTypes)) {
            $this->postTypes=[];
        }
        // add listed types
        foreach ($values as $value) {
            if (! in_array($value, $this->postTypes)) {
                $this->postTypes[]=$value;
            }
        }
        return $this;
    }

    /**
     * Unset post types from taxonomy.
     *
     * @param string ...$values Value to be set on selected arg
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
     *
     * @return CustomTaxonomy This very instance for chaining purpose.
     */
    public function unsetPostTypes(string ...$values)
    {
        // $this->postTypes must exist
        if (! isset($this->postTypes)) {
            $this->postTypes=[];
        }
        // start a blank postType list
        $newPostTypeList=[];
        // add current types, except that passed in $values arg
        foreach ($this->postTypes as $postType) {
            if (! in_array($postType, $values)) {
                $newPostTypeList[]=$postType;
            }
        }
        // replace post type list
        $this->postTypes=$newPostTypeList;
        return $this;
    }

    /**
     * Get taxonomy post types.
     *
     * @return array The list of post types to register this taxonomy with
     */
    public function getPostTypes()
    {
        // default is the post post type
        if (empty($this->postTypes)) {
            return ['post'];
        }
        return $this->postTypes;
    }

    /**
     * Register Taxonomy
     *
     * Hook the custom taxonomy registration
     *
     * @return CustomTaxonomy The instance of the class for chaining
     */
    public function register()
    {
        add_action('init', [$this, 'registerTaxonomy']);
        return $this;
    }

    /**
     * Displays single selector taxonomy fields.
     *
     * @param WP_Post $post Current post object.
     * @param array   $box  {
     *                      Categories meta box arguments.
     *
     *     @type string   $id       Meta box 'id' attribute.
     *     @type string   $title    Meta box title.
     *     @type callable $callback Meta box display callback.
     *     @type array    $args {
     *         Extra meta box arguments.
     *
     *         @type string $taxonomy Taxonomy. Default 'category'.
     *     }
     * }
     */
    public function singleSelectorTaxonomyMetaBox($post, $box)
    {
        $defaults = array( 'taxonomy' => $this->getSlug() );
        if (! isset($box['args']) || ! is_array($box['args'])) {
            $args = array();
        } else {
            $args = $box['args'];
        }
        $parsed_args = wp_parse_args($args, $defaults);
        $tax_name = esc_attr($parsed_args['taxonomy']);
        $taxonomy = get_taxonomy($parsed_args['taxonomy']);
        ?>
        <div id="taxonomy-<?php echo $tax_name; ?>" class="categorydiv">
            <span style="color:red;">debug</span>
            <ul id="<?php echo $tax_name; ?>-tabs" class="category-tabs">
                <li class="tabs">
                    <a href="#<?php echo $tax_name; ?>-all">
                        <?php
                        echo $taxonomy->labels->all_items;
                        ?>
                    </a>
                </li>
                <li class="hide-if-no-js">
                    <a href="#<?php echo $tax_name; ?>-pop">
                        <?php
                        echo esc_html($taxonomy->labels->most_used);
                        ?>
                    </a>
                </li>
            </ul>

            <div
                id="<?php echo $tax_name; ?>-pop"
                class="tabs-panel"
                style="display: none;"
            >
                <ul
                    id="<?php echo $tax_name; ?>checklist-pop"
                    class="categorychecklist form-no-clear"
                >
                    <?php
                    $popular_ids = wp_popular_terms_checklist($tax_name);
                    ?>
                </ul>
            </div>

            <div id="<?php echo $tax_name; ?>-all" class="tabs-panel">
                <?php
                $name=('category' === $tax_name)
                ? 'post_category'
                : 'tax_input[' . $tax_name . ']';
                /* Allows for an empty term set to be sent. 
                0 is an invalid term ID and will be ignored by empty() checks.*/
                echo "<input type='hidden' name='{$name}[]' value='0' />";
                ?>
                <ul
                    id="<?php echo $tax_name; ?>checklist"
                    data-wp-lists="list:<?php echo $tax_name; ?>"
                    class="categorychecklist form-no-clear"
                >
                    <?php
                    wp_terms_checklist(
                        $post->ID,
                        array(
                            'taxonomy' => $tax_name,
                            'popular_cats' => $popular_ids,
                        )
                    );
                    ?>
                </ul>
            </div>
            <?php
            if (current_user_can($taxonomy->cap->edit_terms)) :
                ?>
            <div id="<?php echo $tax_name; ?>-adder" class="wp-hidden-children">
                <a
                    id="<?php echo $tax_name; ?>-add-toggle"
                    href="#<?php echo $tax_name; ?>-add"
                    class="hide-if-no-js taxonomy-add-new"
                >
                <?php
                /* translators: %s: Add New taxonomy label. */
                printf(__('+ %s'), $taxonomy->labels->add_new_item);
                ?>
                </a>
                <p
                    id="<?php echo $tax_name; ?>-add"
                    class="category-add wp-hidden-child"
                >
                    <label
                        class="screen-reader-text"
                        for="new<?php echo $tax_name; ?>">
                        <?php echo $taxonomy->labels->add_new_item; ?>
                    </label>
                    <input
                        type="text"
                        name="new<?php echo $tax_name; ?>"
                        id="new<?php echo $tax_name; ?>"
                        class="form-required form-input-tip"
                        value="<?php
                            echo esc_attr($taxonomy->labels->new_item_name);
                        ?>"
                        aria-required="true"
                    />
                    <label
                        class="screen-reader-text"
                        for="new<?php echo $tax_name; ?>_parent"
                    >
                        <?php echo $taxonomy->labels->parent_item_colon; ?>
                    </label>
                    <?php
                    $parent_dropdown_args = array(
                        'taxonomy' => $tax_name,
                        'hide_empty' => 0,
                        'name' => 'new' . $tax_name . '_parent',
                        'orderby' => 'name',
                        'hierarchical' => 1,
                        'show_option_none' => '&mdash; '
                            . $taxonomy->labels->parent_item
                            . ' &mdash;',
                    );

                    /**
                     * Filters the arguments for the taxonomy parent
                     * dropdown on the Post Edit page.
                     *
                     * @since 4.4.0
                     *
                     * @param array $parent_dropdown_args {
                     *     Optional. Array of arguments to generate
                     *     parent dropdown.
                     *
                     *     @type string   $taxonomy         Name of the 
                     *                                      taxonomy to retrieve.
                     *     @type bool     $hide_if_empty    True to skip 
                     *                                      generating markup if no
                     *                                      categories are
                     *                                      found. Default 0.
                     *     @type string   $name             Value for the
                     *                                      'name' attribute
                     *                                      of the select element.
                     *                                      Default 
                     *                                      "new{$tax_name}_parent".
                     *     @type string   $orderby          Which column 
                     *                                      to use for ordering
                     *                                      terms. Default 'name'.
                     *     @type bool|int $hierarchical     Whether to 
                     *                                      traverse the taxonomy
                     *                                      hierarchy. Default 1.
                     *     @type string   $show_option_none Text to display
                     *                                      for the "none" option.
                     *                                      Default "&mdash; {$parent} &mdash;",
                     *                                      where `$parent`
                     *                                      is 'parent_item'
                     *                                      taxonomy label.
                     * }
                     */
                    $parent_dropdown_args = apply_filters(
                        'post_edit_category_parent_dropdown_args',
                        $parent_dropdown_args
                    );

                    wp_dropdown_categories($parent_dropdown_args);
                    ?>
                    <input
                        type="button"
                        id="<?php echo $tax_name; ?>-add-submit"
                        data-wp-lists="add:<?php echo $tax_name; ?>checklist:<?php echo $tax_name;?>-add"
                        class="button category-add-submit"
                        value="<?php
                            echo esc_attr($taxonomy->labels->add_new_item);
                        ?>"
                    />
                    <?php
                        wp_nonce_field(
                            'add-' . $tax_name,
                            '_ajax_nonce-add-' . $tax_name,
                            false
                        );
                    ?>
                    <span id="<?php echo $tax_name; ?>-ajax-response"></span>
                </p>
            </div>
            <?php endif; ?>
        </div>
        <?php
    }
}