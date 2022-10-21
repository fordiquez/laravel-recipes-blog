<aside class="sidebar-widget-area">
    <div id="rt-recent-recipe-5" class="widget rt_widget_recent_recipe_with_image">
        <div class="rt-widget-title-holder">
            <h3>Latest Recipe</h3>
        </div>
        <div class="widget-latest">
            <ul class="block-list">
                @foreach($latestRecipes as $recipe)
                    <li class="single-item">
                        <div class="item-img">
                            <a href="{{ route('main.recipes.show', $recipe->slug) }}" title="{{ $recipe->title }}"
                               class="rt-wid-post-img">
                                <img width="150" height="150" class="rt-lazy" src="{{ asset($recipe->getPhoto()) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                            </a>
                            <div class="count-number">{{ $loop->iteration }}</div>
                        </div>
                        <div class="item-content">
                            <div class="item-ctg">
                                <span class="styles">
                                    <span class="ctg-name">
                                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine->id]]) }}">
                                            {{ $recipe->cuisine->title }}
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <h4 class="item-title">
                                <a href="{{ route('main.recipes.show', $recipe->slug) }}">{{ $recipe->title }}</a>
                            </h4>
                            <div class="posted-date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>{{ $recipe->getCreatedAtDate() }}</span>
                            </div>
                            <div class="item-post-by">
                                <i class="fa fa-user"></i>
                                <span>
                                    <a href="{{ route('admin.users.show', $recipe->user->id) }}" title="Recipes by {{ $recipe->user->getFullName() }}">
                                        {{ $recipe->user->getFullName() }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div id="categories-4" class="widget recipe_categories">
        <div class="rt-widget-title-holder">
            <h3 class="widgettitle">Popular cuisines</h3>
        </div>
        <ul>
            @foreach($cuisines as $cuisine)
                <li class="cat-item d-flex justify-content-between">
                    <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $cuisine->id]]) }}">
                        {{ $cuisine->title }}
                    </a>
                    {{ "($cuisine->recipes_count)" }}
                </li>
            @endforeach
        </ul>
    </div>
    <div id="categories-4" class="widget recipe_categories">
        <div class="rt-widget-title-holder">
            <h3 class="widgettitle">Popular categories</h3>
        </div>
        <ul>
            @foreach($categories as $category)
                <li class="cat-item d-flex justify-content-between">
                    <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">
                        {{ $category->title }}
                    </a>
                    {{ "($category->recipes_count)" }}
                </li>
            @endforeach
        </ul>
    </div>
    <div id="tag_cloud-4" class="widget widget_tag_cloud">
        <div class="rt-widget-title-holder">
            <h3 class="widgettitle">Popular Tags</h3>
        </div>
        <div class="tagcloud">
            @foreach($tags as $tag)
                <a href="{{ route('main.recipes.index', ['tag_id' => [0 => $tag->id]]) }}" title="{{ "$tag->recipes_count recipes" }}">
                    {{ $tag->title }}
                </a>
            @endforeach
        </div>
    </div>
</aside>
