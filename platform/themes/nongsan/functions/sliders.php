<?php

theme_option()
    ->setSection([
    'title'      => __('Slider'),
    'desc'       => __('Cấu hình ảnh slider'),
    'id'         => 'opt-slider-header',
    'subsection' => true,
    'icon'       => 'fa fa-share-alt',
    ])
    ->setField([
        'id'         => 'number_of_images_in_slide',
        'type'       => 'number',
        'section_id' => 'opt-slider-header',
        'label'      => __('Number of Image per slider'),
        'attributes' => [
            'name'    => 'number_of_images_in_slide',
            'value'   => 3,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ]);

for($i = 1; $i <= theme_option('number_of_images_in_slide'); $i++) {
    theme_option()->setField([
        'id'         => 'slider_img_'.$i,
        'section_id' => 'opt-slider-header',
        'type'       => 'mediaImage',
        'label'      => __('Ảnh slider '.$i),
        'attributes' => [
            'name'  => 'slider_img_'.$i,
            'value' => null,
        ],
    ]);
}

theme_option()
    ->setSection([
        'title'      => __('Banner'),
        'desc'       => __('Banner header'),
        'id'         => 'opt-banner-header',
        'subsection' => true,
        'icon'       => 'fa fa-share-alt',
    ]);
theme_option()->setField([
    'id'         => 'opt-banner-header',
    'section_id' => 'opt-banner-header',
    'type'       => 'mediaImage',
    'label'      => __('Banner header'),
    'attributes' => [
        'name'  => 'opt-banner-header',
        'value' => null,
    ],
]);
theme_option()->setField([
    'id'         => 'opt-banner-why-choose',
    'section_id' => 'opt-banner-header',
    'type'       => 'mediaImage',
    'label'      => __('Banner whychoose'),
    'attributes' => [
        'name'  => 'opt-banner-why-choose',
        'value' => null,
    ],
]);
