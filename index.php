<script src="webcam/webcam.min.js"></script>
    <div id="my_camera" style="width:320px; height:240px;"></div>
    <div id="my_result"></div>

    <script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			dest_width: 640,
			dest_height: 480,
			image_format: 'jpeg',
			jpeg_quality: 90,
			force_flash: false,
			flip_horiz: true,
			fps: 45
		});

        Webcam.attach( '#my_camera' );
		
        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
            } );
        }
    </script>

    <a href="javascript:void(take_snapshot())">Take Snapshot</a>



