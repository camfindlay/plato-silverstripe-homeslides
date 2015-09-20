<% if HomeSlides %>
<div class="home-slides-wrapper">
    <div class="home-slides cycle-slideshow"
        data-cycle-fx="{$SlideEffect}"
        data-cycle-speed="{$SlideSpeed}"
        data-cycle-timeout="{$SlideTimeout}"
        data-cycle-slides="> .home-slide"
        data-cycle-pager=".home-slides-pager"
        >
    <% loop HomeSlides.Exclude("Status", "0") %>
        <div class="home-slide" data-interchange="
            [{$Image.CroppedImage(600, 400).URL}, (small)],
            [{$Image.CroppedImage(1000, 400).URL}, (medium)],
            [{$Image.CroppedImage(1400, 400).URL}, (large)],
            ">
            <div class="home-slide-content">
                <div class="row">
                    <div class="large-12 large-centered column">
                        <h1>{$Title}</h1>
                        <p>{$Content}</p>
                        <% if LinkTo && LinkTitle %>
                        <a href="$LinkTo.Link">{$LinkTitle}</a>
                        <% else_if ExternalLinkURL && LinkTitle %>
                        <a href="$ExternalLinkURL" target="_blank">{$LinkTitle}</a>
                        <% end_if %>
                    </div>
                </div>
            </div>
        </div>
    <% end_loop %>
    </div>
    <div class="home-slides-pager"></div>
</div>
<% end_if %>
