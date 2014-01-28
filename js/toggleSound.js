		var soundState = <?php if ($_COOKIE["toggle"]==1){echo "1";}else{echo"0";}?>;
		var html5_audiotypes={"mp3":"audio/mpeg","mp4":"audio/mp4","ogg":"audio/ogg","wav":"audio/wav"}
		var mouseoversound = new Array();
		if (soundState==1){
			for (var i=1; i<6; i++) {
				mouseoversound[i]=createSoundbite("<?php echo $root; ?>sound/Beep3.ogg", "<?php echo $root; ?>sound/Beep3.mp3")
			}
		}
		
		function toggleSound(){
			switch (soundState){
			case 1:
				toggle.src = "<?php echo $root; ?>img/icons/s_off.png"
				soundState = 0
				setCookie("toggle","","-1");
				mouseoversound = ""
				return(false);
			case 0:
				toggle.src = "<?php echo $root; ?>img/icons/s_on.png"
				soundState = 1
				setCookie("toggle",soundState,1);
				for (var i=1; i<6; i++) {
					mouseoversound[i]=createSoundbite("<?php echo $root; ?>sound/Beep3.ogg", "<?php echo $root; ?>sound/Beep3.mp3")
				}
				return(false);
			}
		}
		
		function setCookie(c_name,value,exdays){
			var exdate=new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
			document.cookie=c_name + "=" + c_value + "domain=.sphere-industries.com;path=/";
		}
		function createSoundbite(sound){
			var html5audio=document.createElement('audio')
			if (html5audio.canPlayType){ //check support for HTML5 audio
				for (var i=0; i<arguments.length; i++){
					var sourceel=document.createElement('source')
					sourceel.setAttribute('src', arguments[i])
					if (arguments[i].match(/\.(\w+)$/i))
						sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
					html5audio.appendChild(sourceel)
				}	
				html5audio.load()
				html5audio.playclip=function(){
					html5audio.pause()
					html5audio.currentTime=0
					html5audio.play()
				}
				return html5audio
			}
			else{
				return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio, unfortunately.")}}
			}
		}