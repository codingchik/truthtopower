
//SOUND OBJECT

function Sound(source){
	if(!window.audioContext){
		audioContext = new AudioContext;
	}

	var that = this;
	that.source=source;
	that.buffer =null;
	that.idLoaded = false;

	var getSound=new XMLHttpRequest();
	getSound.open("GET", that.source, true);
	getSound.responseType="arraybuffer";
	getSound.onload=function(){
		audioContext.decodeAudioData(getSound.response,function(buffer){
			that.buffer = buffer;
			that.isLoaded=true;
		});
	}
	getSound.send();
};


//Function to voice mask

Sound.prototype.mask=function(){
	if(this.isLoaded ===true){
		var maskSound=audioContext.createBufferSource();
		maskSound.buffer=this.buffer;
		maskSound.playbackRate.value=0.8
		maskSound.connect(audioContext.destination);
		maskSound.start();
	}
	
}

//Function that plays the file without any alterations

Sound.prototype.play=function(){
	if(this.isLoaded ===true){
		var playSound=audioContext.createBufferSource();
		
		playSound.buffer=this.buffer; 
		playSound.connect(audioContext.destination);
		playSound.start();
	}
	
}

//redirect file
truth = new Sound("truth.mp3")

