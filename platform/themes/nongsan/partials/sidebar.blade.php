<div class="page-sidebar">
    <aside class="widget widget_product_categories">
        <h3 class="widget-title">Danh mục </h3>
        {!!
                            Menu::generateMenu([
                                'slug'    => 'categories',
                                'options' => 'class = "product-categories"',
                                'view'=>'menu/categories'

                            ])
                        !!}
    </aside>
</div>
