// tab change / front-page > contents5
document.addEventListener( 'DOMContentLoaded', function () {
	const contents5 = document.querySelector( '.p-contents5' );
	if ( ! contents5 ) return;
	const tabList    = contents5.querySelector( '.p-contents5__tab ul' );
	const tabs       = contents5.querySelectorAll( '.js-contents5-tab' );
	const panels     = contents5.querySelectorAll( '.js-contents5-panel' );
	const indicator  = contents5.querySelector( '.p-contents5__tab-indicator' );
	if ( ! tabList || ! tabs.length || ! panels.length || ! indicator ) return;
	function moveIndicator( li ) {
		indicator.style.width     = li.offsetWidth + 'px';
		indicator.style.transform = 'translateX(' + li.offsetLeft + 'px)';
	}
	function getActiveTab() {
		return contents5.querySelector( '.js-contents5-tab.is-active' ) || tabs[ 0 ];
	}
	moveIndicator( getActiveTab().parentElement );
	tabs.forEach( function ( tab ) {
		tab.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			const target = tab.dataset.target;
			if ( ! target ) return;
			tabs.forEach( function ( t ) { t.classList.remove( 'is-active' ); } );
			tab.classList.add( 'is-active' );
			moveIndicator( tab.parentElement );
			panels.forEach( function ( panel ) {
				panel.classList.toggle( 'is-active', panel.id === target );
			} );
		} );
		tab.addEventListener( 'mouseenter', function () {
			moveIndicator( tab.parentElement );
		} );
	} );
	tabList.addEventListener( 'mouseleave', function () {
		moveIndicator( getActiveTab().parentElement );
	} );
	window.addEventListener( 'resize', function () {
		moveIndicator( getActiveTab().parentElement );
	} );
} );

// category filter / front-page > contents-news
document.addEventListener( 'DOMContentLoaded', function () {
	const news = document.querySelector( '.js-news' );
	if ( ! news ) return;
	const filters = news.querySelectorAll( '.js-news-filter' );
	const items   = news.querySelectorAll( '.js-news-item' );
	const empty   = news.querySelector( '.js-news-empty' );
	if ( ! filters.length || ! items.length ) return;
	const FADE_DURATION = 300;
	function updateLastVisible() {
		items.forEach( function ( item ) {
			item.classList.remove( 'is-last-visible' );
		} );
		const visibleItems = Array.prototype.filter.call( items, function ( item ) {
			return ! item.hidden;
		} );
		if ( visibleItems.length ) {
			visibleItems[ visibleItems.length - 1 ].classList.add( 'is-last-visible' );
		}
	}
	filters.forEach( function ( filter ) {
		filter.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			const target = filter.dataset.filter;
			if ( ! target ) return;
			filters.forEach( function ( f ) { f.classList.remove( 'is-active' ); } );
			filter.classList.add( 'is-active' );
			items.forEach( function ( item ) {
				if ( ! item.hidden ) {
					item.classList.add( 'is-hiding' );
				}
			} );
			if ( empty && ! empty.hidden ) {
				empty.classList.add( 'is-hiding' );
			}
			window.setTimeout( function () {
				let visibleCount = 0;
				items.forEach( function ( item ) {
					const categories = ( item.dataset.categories || '' ).split( ' ' );
					const isMatch = target === 'all' || categories.includes( target );
					item.hidden = ! isMatch;
					item.classList.remove( 'is-hiding' );
					if ( isMatch ) visibleCount++;
				} );
				if ( empty ) {
					empty.hidden = visibleCount > 0;
					empty.classList.remove( 'is-hiding' );
				}
				updateLastVisible();
			}, FADE_DURATION );
		} );
	} );
	updateLastVisible();
} );

// slide gallery / sub-page > restaurant list
document.addEventListener( 'DOMContentLoaded', function () {
	const slideshow = document.querySelector( '.restaurants__slideshow' );
	if ( ! slideshow ) return;
	const track        = slideshow.querySelector( '#rsTrack' );
	const dots         = slideshow.querySelectorAll( '.rs-dot' );
	const counter      = slideshow.querySelector( '#rsCounter' );
	const progressFill = slideshow.querySelector( '#rsProgressFill' );
	const btnPrev      = slideshow.querySelector( '#rsPrev' );
	const btnNext      = slideshow.querySelector( '#rsNext' );
	if ( ! track || ! btnPrev || ! btnNext ) return;
	const slides = track.querySelectorAll( '.rs-slide' );
	const total  = slides.length;
	if ( total === 0 ) return;
	let current    = 0;
	let dragStartX = 0;
	let isDragging = false;
	function goTo( index ) {
		slides[ current ].classList.remove( 'active' );
		if ( dots.length ) {
			dots[ current ].classList.remove( 'active' );
			dots[ current ].setAttribute( 'aria-selected', 'false' );
		}
		current = ( index + total ) % total;
		slides[ current ].classList.add( 'active' );
		if ( dots.length ) {
			dots[ current ].classList.add( 'active' );
			dots[ current ].setAttribute( 'aria-selected', 'true' );
		}
		track.style.transform = 'translateX(-' + ( current * 100 ) + '%)';
		if ( progressFill ) {
			progressFill.style.width = ( ( current + 1 ) / total * 100 ) + '%';
		}
		if ( counter ) {
			counter.textContent =
				String( current + 1 ) +
				' / ' +
				String( total );
		}
	}
	btnPrev.addEventListener( 'click', function () { goTo( current - 1 ); } );
	btnNext.addEventListener( 'click', function () { goTo( current + 1 ); } );
	dots.forEach( function ( dot ) {
		dot.addEventListener( 'click', function () {
			goTo( Number( dot.dataset.index ) );
		} );
	} );
	document.addEventListener( 'keydown', function ( e ) {
		const rect = slideshow.getBoundingClientRect();
		const inView = rect.top < window.innerHeight && rect.bottom > 0;
		if ( ! inView ) return;
		if ( e.key === 'ArrowLeft'  ) goTo( current - 1 );
		if ( e.key === 'ArrowRight' ) goTo( current + 1 );
	} );
	slideshow.addEventListener( 'mousedown', function ( e ) {
		isDragging = true;
		dragStartX = e.clientX;
		slideshow.classList.add( 'is-dragging' );
		track.classList.add( 'no-transition' );
	} );
	document.addEventListener( 'mousemove', function ( e ) {
		if ( ! isDragging ) return;
		var diff = e.clientX - dragStartX;
		track.style.transform =
			'translateX(calc(-' + ( current * 100 ) + '% + ' + diff + 'px))';
	} );
	document.addEventListener( 'mouseup', function ( e ) {
		if ( ! isDragging ) return;
		isDragging = false;
		slideshow.classList.remove( 'is-dragging' );
		track.classList.remove( 'no-transition' );
		var diff = e.clientX - dragStartX;
		if      ( diff < -60 ) goTo( current + 1 );
		else if ( diff >  60 ) goTo( current - 1 );
		else track.style.transform = 'translateX(-' + ( current * 100 ) + '%)';
	} );
	slideshow.addEventListener( 'touchstart', function ( e ) {
		dragStartX = e.touches[ 0 ].clientX;
		track.classList.add( 'no-transition' );
	}, { passive: true } );
	slideshow.addEventListener( 'touchmove', function ( e ) {
		var diff = e.touches[ 0 ].clientX - dragStartX;
		track.style.transform =
			'translateX(calc(-' + ( current * 100 ) + '% + ' + diff + 'px))';
	}, { passive: true } );
	slideshow.addEventListener( 'touchend', function ( e ) {
		track.classList.remove( 'no-transition' );
		var diff = e.changedTouches[ 0 ].clientX - dragStartX;
		if      ( diff < -50 ) goTo( current + 1 );
		else if ( diff >  50 ) goTo( current - 1 );
		else track.style.transform = 'translateX(-' + ( current * 100 ) + '%)';
	} );
	goTo( 0 );
} );