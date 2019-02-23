$(document).ready(function(){
  $('.btn').popover({trigger:'hover',delay:{show:0, hide:2000},placement:'top',html:true})

	$('#video-container').css('display','block');

  $('#play-button-container').click(function(){
		$(this).removeClass('play-button-normal').addClass('play-button-click');
    jQuery('#video').tubeplayer();
	});
  $('#play-button-container').hover(
    function(){ $(this).addClass('play-button-hover') },
    function(){ $(this).removeClass('play-button-hover')}
  );

jQuery("#video").tubeplayer({
  width: 854, // the width of the player
  height: 480, // the height of the player
  allowFullScreen: "false", // true by default, allow user to go full screen
  initialVideo: "4FJTfE9YdUU",//"8H71cJXrzak", // the video that is loaded into the player
  preferredQuality: "large",// preferred quality: default, small, medium, large, hd720
  showControls: 0,
  iframed: true,
  start: 1,
  protocol: 'https',
  modestbranding: true,
  onPlay: function(id){$('#video').tubeplayer('seek',1)}, // after the play method is called
  onPause: function(){}, // after the pause method is called
  onStop: function(){$('#video').css('height','0px')}, // after the player is stopped
  onSeek: function(time){}, // after the video has been seeked to a defined point
  onMute: function(){}, // after the player is muted
  onUnMute: function(){}, // after the player is unmuted
  onPlayerUnstarted: function(){}, // when the player returns a state of unstarted
  onPlayerEnded: function(){$('#play-button-container').css('display','block').addClass('play-button-normal').removeClass('play-button-click');$('#play-text').css('display','block').html('Play trailer.');$('#video').css('height','0px').tubeplayer('seek',0).tubeplayer('stop');}, // when the player returns a state of ended
  onPlayerPlaying: function(){var t = setTimeout("$('#play-button-container').css('display','none');$('#play-text').css('display','none');$('#video').css('height','480px')",300)}, //when the player returns a state of playing
  onPlayerPaused: function(){}, // when the player returns a state of paused
  onPlayerBuffering: function(){$('#play-text').html('Buffering..')}, // when the player returns a state of buffering
  onPlayerCued: function(){}, // when the player returns a state of cued
  onQualityChange: function(quality){}, // a function callback for when the quality of a video is determined
});

  //os detection and download link update
  var downloadLink = $('#download-link');
  var currentPlatform = navigator.platform;
  if (currentPlatform.indexOf('Win') == 0) {
      //no change needed
  } else if (currentPlatform.indexOf('Mac') == 0) {
      downloadLink.attr('href', downloadLink.data('link-osx'));
  } else {
      downloadLink.attr('href', downloadLink.data('link-linux'));
  }

});

$(function(){
$(".popup").colorbox({html: function(){
  var ytid = $(this).attr('ytid');
  return '<iframe width="640" height="360" src="https://www.youtube.com/embed/'+ ytid +'" frameborder="0" allowfullscreen></iframe>';
},transition:"none",scrolling:false});
});

// slogan stuff
var slogans;

slogans = [
  'Makes zerg rush look like snails on sedatives',
  'The first and fastest eSports game',
  'Built on pure skills since 1996',
  'QuakeWorld - where it all started',
  'Back to the roots',
  'Level yourself, not some stupid MMORPG character!',
  'Adrenaline shots since 1996',
  'Take control of the game',
  'Action. Speed. Satisfaction.',
  'Not for the faint of heart',
  'Be quick or be dead',
  'Still the best action shooter'
]
showRandomSlogan();


function getRandomSlogan() {
  return slogans[Math.floor(Math.random() * slogans.length)];
}

function showRandomSlogan(slogan) {
  $('#slogan span').html(getRandomSlogan()).fadeIn('slow');
}

setInterval(function(){
  $('#slogan span').fadeOut('slow', function(){
    showRandomSlogan();
  });
}, 7000);
