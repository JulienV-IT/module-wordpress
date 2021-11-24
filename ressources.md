# ressources pour dev wordpress

[le markdown](https://markdownlivepreview.com/)


## les tutos

[codex](https://codex.wordpress.org/Main_Page)

[w3school](https://www.w3schools.in/wordpress-tutorial/)

[Full-Tuto](https://jeansairien.github.io/Full-Tuto/)

[link-utils](https://jeansairien.github.io/link-utils/)

[awesome-wordpress](https://github.com/miziomon/awesome-wordpress)

[ChildTheme tuto](https://kinsta.com/blog/wordpress-child-theme/)

[referenciels](https://developer.wordpress.org/reference/)

[Guide](https://www.wppourlesnuls.com/creer-blog-wordpress/)

## usage base

[shortcode doc offciel](https://wordpress.org/support/article/shortcode-block/) 

[shortcode astuceswp](https://astuceswp.fr/tutos/409/definition-shortcode-wordpress)

[shortcode codex](https://codex.wordpress.org/fr:Shortcode)

[liste default shortcode](https://wordpress.com/support/shortcodes/)

---

[etiquettes et seo](https://astuceswp.fr/seo/194/etiquettes-seo-wordpress)

---

[categorie](https://wpformation.com/categories-wordpress/)

---

[function file style add](https://developer.wordpress.org/reference/functions/wp_register_style/)

_exemple fonctions.php for style_

```php
/* enqueue script for parent theme stylesheeet */
function childtheme_parent_styles() {

 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );

}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');
```
