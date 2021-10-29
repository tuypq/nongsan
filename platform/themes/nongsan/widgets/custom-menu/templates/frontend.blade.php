<div class="page-sidebar">
    <aside class="widget widget_product_categories">
        <h3 class="widget-title">{{ $config['name'] }}</h3>
        {!!
                            Menu::generateMenu([
                                'slug'    => $config['menu_id'],
                                'options' => 'class = "product-categories"',
                                'view'=>'menu/categories'
                            ])
                        !!}
    </aside>
</div>
