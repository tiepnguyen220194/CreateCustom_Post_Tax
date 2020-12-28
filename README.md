# CustomPost_CustomTaxonomy
CustomPost_CustomTaxonomy

Coppy vào file function.php và thưởng thức .

/* Create custom post type */
create_post_type("Dự án","duan","duan",array( 'title','editor','thumbnail','excerpt','comments'));
/* Create custom taxonomy */
create_taxonomy_theme("Danh mục Dự án","danhmuc-duan","danhmuc-duan","duan");
