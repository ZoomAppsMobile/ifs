<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Cтраны и языки',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Все языки', 'icon' => 'fa fa-user', 'url' => ['language/index'],'active' => $this->context->id == 'language'],
                            ['label' => 'Все cтраны', 'icon' => 'fa fa-user', 'url' => ['country/index'],'active' => $this->context->id == 'country'],
                            ['label' => 'Страны с языком', 'icon' => 'fa fa-user', 'url' => ['countrylang/index'],'active' => $this->context->id == 'countrylang'],
                            ['label' => 'Предвыбор', 'icon' => 'fa fa-user', 'url' => ['preselect/index'],'active' => $this->context->id == 'preselect'],
                        ],
                    ],

                    [
                        'label' => 'Меню',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Меню', 'icon' => 'fa fa-user', 'url' => ['menu/index'],'active' => $this->context->id == 'menu'],
                            ['label' => 'Категории', 'icon' => 'fa fa-user', 'url' => ['submenu/index'],'active' => $this->context->id == 'submenu'],
                        ],
                    ],
                    ['label' => 'Баннер страницы ', 'icon' => 'fa fa-user', 'url' => ['banner/index'],'active' => $this->context->id == 'banner'],
                    ['label' => 'Кнопки в баннере', 'icon' => 'fa fa-user', 'url' => ['buttons/index'],'active' => $this->context->id == 'buttons'],
                    [
                        'label' => 'Главная страница',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Баннер ', 'icon' => 'fa fa-user', 'url' => ['mainslide/index'],'active' => $this->context->id == 'mainslide'],
                            ['label' => 'Успехи', 'icon' => 'fa fa-user', 'url' => ['mainprogress/index'],'active' => $this->context->id == 'mainprogress'],
                        ],
                    ],


                    [
                        'label' => 'IFS',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'О нас', 'icon' => 'fa fa-user', 'url' => ['ifsabout/index'],'active' => $this->context->id == 'ifsabout'],
                            ['label' => 'Десять фактов о нас', 'icon' => 'fa fa-user', 'url' => ['ifsfacts/index'],'active' => $this->context->id == 'ifsfacts'],
                            ['label' => 'Наши услуги ', 'icon' => 'fa fa-user', 'url' => ['ifsservice/index'],'active' => $this->context->id == 'ifsservice'],
                            ['label' => 'Наши отличия ', 'icon' => 'fa fa-user', 'url' => ['ifsdiff/index'],'active' => $this->context->id == 'ifsdiff'],
                            ['label' => 'Наша медицинская команда ', 'icon' => 'fa fa-user', 'url' => ['ifsmedteam/index'],'active' => $this->context->id == 'ifsmedteam'],
                            ['label' => 'Наша команда', 'icon' => 'fa fa-user', 'url' => ['ifsteam/index'],'active' => $this->context->id == 'ifsteam'],
                            ['label' => 'Контакты', 'icon' => 'fa fa-user', 'url' => ['ifscontact/index'],'active' => $this->context->id == 'ifscontact'],
                        ],
                    ],


                    [
                        'label' => 'Родители',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Как все это работает', 'icon' => 'fa fa-user', 'url' => ['parenthowallwork/index'],'active' => $this->context->id == 'parenthowallwork'],
                            ['label' => 'Программы', 'icon' => 'fa fa-user', 'url' => ['parentprogram/index'],'active' => $this->context->id == 'parentprogram'],
                            ['label' => 'Выгоды ', 'icon' => 'fa fa-user', 'url' => ['parentbenefit/index'],'active' => $this->context->id == 'parentbenefit'],
                            ['label' => 'Почему казахстан', 'icon' => 'fa fa-user', 'url' => ['parentwhykazak/index'],'active' => $this->context->id == 'parentwhykazak'],
                            ['label' => 'Наши ведущие врачи ', 'icon' => 'fa fa-user', 'url' => ['parentdoctor/index'],'active' => $this->context->id == 'parentdoctor'],
                            ['label' => 'Законы о суррогатном материнстве', 'icon' => 'fa fa-user', 'url' => ['parentlaw/index'],'active' => $this->context->id == 'parentlaw'],
                            ['label' => 'Истории и отзывы', 'icon' => 'fa fa-user', 'url' => ['parentstory/index'],'active' => $this->context->id == 'parentstory'],
                            ['label' => 'FAQ', 'icon' => 'fa fa-user', 'url' => ['parentfaq/index'],'active' => $this->context->id == 'parentfaq'],
                            ['label' => 'Как начать', 'icon' => 'fa fa-user', 'url' => ['parenthowstart/index'],'active' => $this->context->id == 'parenthowstart'],
                        ],
                    ],

                    [
                        'label' => 'Донорство яйцеклеток',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Программы ',
                                'icon' => 'fa fa-user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Контент', 'icon' => 'fa fa-user', 'url' => ['donationprogramcon/index'],'active' => $this->context->id == 'donationprogramcon'],
                                    ['label' => 'Программы', 'icon' => 'fa fa-user', 'url' => ['donationprogramtype/index'],'active' => $this->context->id == 'donationprogramtype'],
                                ],
                            ],
                            ['label' => 'Как начать ', 'icon' => 'fa fa-user', 'url' => ['donationhowstart/index'],'active' => $this->context->id == 'donationhowstart'],
                            ['label' => 'Costs', 'icon' => 'fa fa-user', 'url' => ['donationcost/index'],'active' => $this->context->id == 'donationcost'],

                        ],
                    ],

                    [
                        'label' => 'Био Транспорт',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Транспортировка биоматериала ',
                                'icon' => 'fa fa-user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Содержания', 'icon' => 'fa fa-user', 'url' => ['biotranscon/index'],'active' => $this->context->id == 'biotranscon'],
                                    ['label' => 'Факты', 'icon' => 'fa fa-user', 'url' => ['biotransfact/index'],'active' => $this->context->id == 'biotransfact'],
                                ],
                            ],
                            [
                                'label' => 'Процесс  ',
                                'icon' => 'fa fa-user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Процессы', 'icon' => 'fa fa-user', 'url' => ['biotransprocess/index'],'active' => $this->context->id == 'biotransprocess'],
                                    ['label' => 'Названия кнопка', 'icon' => 'fa fa-user', 'url' => ['biotransprocessbutton/index'],'active' => $this->context->id == 'biotransprocessbutton'],
                                ],
                            ],
                            ['label' => 'Costs', 'icon' => 'fa fa-user', 'url' => ['biotranscost/index'],'active' => $this->context->id == 'biotranscost'],
                        ],
                    ],
                    ['label' => 'Контакты', 'icon' => 'fa fa-user', 'url' => ['contact/index'],'active' => $this->context->id == 'contact'],
                ],
            ]
        ) ?>
    </section>

</aside>