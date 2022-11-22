<?php

add_action("wp_ajax_nopriv_ajax_search", "ajax_search");
add_action("wp_ajax_ajax_search", "ajax_search");
function ajax_search()
{
    $args = array(
        "post_type"      => "any", // Тип записи: post, page, кастомный тип записи
        "post_status"    => "publish",
        "order"          => "DESC",
        "orderby"        => "date",
        "s"              => $_POST["term"],
        "posts_per_page" => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            get_template_part("template-parts/loop-search-item");
        endwhile;
    } else {
        echo pll__('Nothing_found');
    }
    exit;
}

# Подсветка результатов поиска
add_filter("the_content", "search_results_hightlight");
add_filter("the_excerpt", "search_results_hightlight");
add_filter("the_title", "search_results_hightlight");
function search_results_hightlight($text)
{
    // цвета
    $styles = [
        "color: #000; background: #98fd65;",
        "color: #000; background: #ffcc56;",
        "color: #000; background: #98cefa;",
        "color: #000; background: #fd9897;",
        "color: #000; background: #df7dca;",
    ];

    // только для страницы поиска
    if (!is_search())
        return $text;

    $query_terms = get_query_var("search_terms");

    if (empty($query_terms))
        $query_terms = array_filter([get_query_var("s")]);

    if (empty($query_terms))
        return $text;

    $n = 0;
    foreach ($query_terms as $term) {
        $n++;

        $term = preg_quote($term, "/");
        $text = preg_replace_callback("/$term/iu", function ($match) use ($styles, $n) {
            return '<span style="' . $styles[$n] . '">"' . $match[0] . '"</span>';
        }, $text);
    }

    return $text;
}