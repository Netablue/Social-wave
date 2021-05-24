
<body class="display-player">
	<audio id="myAudio" ontimeupdate="onTimeUpdate()">
		<!-- <source src="audio.ogg" type="audio/ogg"> -->
		<source id="source-audio" src="" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>

	{{-- Control Player --}}
	<div class="player-ctn">
		<div class="infos-ctn">
		<div class="timer">00:00</div>
		<div class="title"></div>
		<div class="duration">00:00</div>
	</div>

	<div id="myProgress">
		<div id="myBar"></div>
	</div>

	<div class="btn-ctn">
		<div class="btn-action first-btn" onclick="previous()">
			<div id="btn-faws-back">
				<i class='fa fa-step-backward'></i>
			</div>
		</div>

		<div class="btn-action" onclick="rewind()">
			<div id="btn-faws-rewind">
				<i class='fa fa-backward'></i>
			</div>
		</div>

		<div class="btn-action" onclick="toggleAudio()">
			<div id="btn-faws-play-pause">
				<i class='fa fa-play' id="icon-play"></i>
				<i class='fa fa-pause' id="icon-pause" style="display: none"></i>
			</div>
		</div>

		<div class="btn-play" onclick="forward()">
			<div id="btn-faws-forward">
				<i class='fa fa-forward'></i>
			</div>
		</div>

		<div class="btn-action" onclick="next()">
			<div id="btn-faws-next">
				<i class='fa fa-step-forward'></i>
			</div>
		</div>

		<div class="btn-mute" id="toggleMute" onclick="toggleMute()">
			<div id="btn-faws-volume">
				<i id="icon-vol-up" class='fa fa-volume-up'></i>
				<i id="icon-vol-mute" class='fa fa-volume-mute' style="display: none"></i>
			</div>
		</div>

		<div class="btn-repeat" id="toggleRepeat" onclick="toggleRepeat()">
			<div id="btn-repeat">
				<i id="icon-vol-up" class='fa fa-repeat'></i>
			</div>
		</div>
	</div>

	<div class="playlist-ctn"></div>
	
</body>

