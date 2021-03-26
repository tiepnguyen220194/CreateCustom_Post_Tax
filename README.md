# CTPost_CTTax

Coppy vào file function.php và thưởng thức .

/* Create CTPost */
// (title, slug_code, slug)
create_post_type("Dịch vụ","service","dichvu");

/* Create CTTax */
// (title, slug, slug_code, post_type)
create_taxonomy_theme("Danh mục Dịch vụ","danhmuc-dichvu","service-cat","service");
