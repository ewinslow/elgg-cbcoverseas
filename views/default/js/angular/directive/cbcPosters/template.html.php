<section class="elgg-module elgg-module-aside" data-ng-show="!!posters.items.length">
	<header class="elgg-head">
		<h3 class="elgg-title">Send a note:</h3>
	</header>
	<div class="elgg-body">
		<ul class="elgg-list">
			<li data-ng-repeat="poster in posters.items">
				<div class="elgg-image-block">
					<a href="/messages/compose?send_to={{poster.guid}}" class="elgg-image">
						<img data-ng-src="{{poster.image.url}}" alt="" width="30" height="30" />
					</a>
					<div class="elgg-body">
						<div>
							<a href="/messages/compose?send_to={{poster.guid}}">
								{{poster.displayName}}
							</a>
						</div>
						<div class="elgg-subtext">
							{{poster.summary}}
						</div>
					</div>
				</div>
			</li>
		<ul>
	</div>
</section>