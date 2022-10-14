<div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
        <div class="elementor-element elementor-widget">
            <div class="elementor-widget-container">
                <div class="sec-title style1 left barshow">
                    <div class="sec-title-holder">
                        <h2 class="rtin-title">
                            About Me<span class="title-bar"></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-widget">
            <div class="elementor-widget-container">
                <div class="about-info-text about-info-style1">
                    <div class="content-wrap">
                        <img width="250" height="250" src="{{ asset('assets/admin/img/admin.jpg') }}" class="attachment-full size-full" alt="Admin" title="Admin">
                        <div class="about-content">
                            <div class="rtin-content">
                                <h4 class="h3">Richard Ford</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquid blanditiis deserunt et explicabo laudantium neque praesentium rem repellendus reprehenderit!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element element-sidebar-title elementor-widget">
            <div class="elementor-widget-container">
                <h3 class="fw-bold">Latest Recipes</h3>
                <div class="widget-latest">
                    <ul class="block-list">
                        @foreach($latestRecipes as $recipe)
                        <li class="single-item">
                            <div class="item-img">
                                <a href="{{ route('main.recipes.show', $recipe) }}" title="{{ $recipe->title }}" class="rt-wid-post-img">
                                    <img src="{{ $recipe->getPhoto() }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                </a>
                                <div class="count-number">{{ $loop->iteration }}</div>
                            </div>
                            <div class="item-content">
                                <div class="item-ctg">
                                    <span class="styles">
                                        <span class="ctg-name">
                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine_id]]) }}">
                                                {{ $recipe->cuisine->title }}
                                            </a>
                                        </span>
                                    </span>
                                </div>

                                <h4 class="item-title">
                                    <a href="{{ route('main.recipes.show', $recipe) }}">
                                        {{ $recipe->title }}
                                    </a>
                                </h4>
                                <div class="posted-date">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $recipe->created_at }}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="elementor-element element-sidebar-title elementor-widget elementor-widget-wp-widget-categories">
            <div class="elementor-widget-container">
                <h3 class="fw-bold">Popular cuisines</h3>
                <ul>
                    @foreach($cuisines as $cuisine)
                    <li>
                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $cuisine->id]]) }}">
                            {{ $cuisine->title }}
                        </a>
                        <span>({{ $cuisine->recipes_count }})</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="elementor-element element-sidebar-title elementor-widget elementor-widget-wp-widget-categories">
            <div class="elementor-widget-container">
                <h3 class="fw-bold">Popular categories</h3>
                <ul>
                    @foreach($categories as $category)
                    <li>
                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">
                            {{ $category->title }}
                        </a>
                        <span>({{ $category->recipes_count }})</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="elementor-widget-wrap">
            <div
                class="elementor-element element-sidebar-title elementor-widget">
                <div class="elementor-widget-container">
                    <h3 class="fw-bold">Popular Tags</h3>
                    <div class="tagcloud">
                        @foreach($tags as $tag)
                        <a href="{{ route('main.recipes.index', ['tag_id' => [0 => $tag->id]]) }}">
                            {{ $tag->title }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
