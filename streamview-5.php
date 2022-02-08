<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <link rel="stylesheet" href="style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <script>
        $('#table').bootstrapTable({
            url: 'data1.json',
            columns: [{
                    field: 'id',
                    title: 'Item ID'
                },
                {
                    field: 'name',
                    title: 'Item Name'
                },
                {
                    field: 'price',
                    title: 'Item Price'
                },
            ]
        });
    </script>
</head>

<body>
    <!-- onClick="location.href='http://localhost/stream2/call.php'" -->
    <!-- data-target="#myModal" -->
    <div class="header">
        <div class="header-right">
            <!-- <button type="button" data-toggle="modal">Capture</button> -->
            <a href="#about">Kembali</a>
            <button id="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Capture</button>
        </div>
        <h1>NO UJI KENDARAAN </h1>

        <h4 style="display: inline;">NO KENDARAAN - JENIS KENDARAAN</h4>
        <!--		<button type="submit" onclick="alert('click me');" style="margin-right: 10px ; padding: 10px; background-color: white; color: black; float: right;">Klik me!</button>
 -->
    </div>

    <div class="row">
        <div class="col-4 menu">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab">Data Pendaftaran</a>
                </li>
                <li><a href="#2" data-toggle="tab">Selesai Foto</a>
                </li>
            </ul>
            <div class="tab-content ">
                <div class="tab-pane active" id="1">
                    <!-- <h3>Standard tab panel created on bootstrap using nav-tabs</h3> -->
                    <table style="width: 60%;" data-url="http://wenzhixin.net.cn/examples/bootstrap_table/data" data-pagination="true" data-page-list="[10, 20]" data-toggle="table" id="table1">
                        <colgroup>
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 15%;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th data-field="state" data-radio="true"></th>
                                <th data-field="id" data-align="right" data-sortable="true">Item ID</th>
                                <th data-field="name" data-align="center" data-sortable="true">Item Name</th>
                                <th data-field="price" data-sortable="true">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="2">
                    <!-- <h3>Notice the gap between the content and tab after applying a background color</h3> -->
                    <?php include("table2.php");
                    ?>
                </div>

            </div>

        </div>

        <div class="col-8">
            <div class="row frame">
                <div class="col-6">
                    <label id="test"></label>
                    Kamera Depan
                    <div class="container">
                        <iframe class="responsive-iframe" src="https://rtsp.me/embed/dhFeTeb9/"></iframe>
                    </div>
                </div>
                <div class="col-6">
                    Kamera Belakang
                    <div class="container">
                        <video id="video" class="video-js vjs-fluid vjs-default-skin responsive-iframe" controls preload="auto" data-setup='{}'>
                            <source src="http://localhost/stream2/video_convert/stream.m3u8" type="application/x-mpegURL">
                        </video>
                        <!-- <iframe id="video" class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe> -->
                    </div>

                </div>
            </div>
            <div class="row frame">
                <div class="col-6">
                    Kamera Kanan
                    <div class="container">
                        <!-- http://localhost/stream2/cam2/video_convert/stream.m3u8 -->
                        <video id="my_video_2" class="video-js vjs-fluid vjs-default-skin responsive-iframe" controls preload="auto" data-setup='{}'>
                            <source src="http://localhost/stream2/video_convert/stream.m3u8" type="application/x-mpegURL">
                        </video>
                        <!-- <iframe class="responsive-iframe" src="https://www.youtube.com/embed/5ZH2it92ZmA"></iframe> -->
                    </div>
                </div>
                <div class="col-6">
                    Kamera Kiri
                    <div class="container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="margin-top: 100%;">

                <div class="modal-body" style="text-align: center;">
                    <div class="loader" style="margin-bottom: 4px; margin-left: 40%;"></div>
                    <div>
                        <h4>Waiting . . .</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        var player = videojs('video');
        player.play();
        var player2 = videojs('my_video_2');
        player2.play();
    </script>


    <script>
        var $table = $('#table1'),
            $button = $('#button');
        var obj;
        var name = "HII";
        var profile_viewer_uid = 1;
        var data1 = "";


        $(function() {
            $button.click(function() {
                $data1 = (JSON.stringify($("#table1").bootstrapTable('getSelections')));
                // console.log($conv);
                window.location.href = ('http://localhost/stream2/call_json.php?uid=' + $data1)
                //         // $.ajax({
                //         //     type: "GET",
                //         //     url: "http://localhost/stream2/call.php",
                //         //     data: username,
                //         //     success: function(data) {
                //         //         console.log(data);
                //         //     }
                //         // });
                //         // $(document).ready(function() {
                //         //     var username = "syed ali";
                //         //     console.log(username);
                //         //     $.ajax({
                //         //         url: "http://localhost/stream2/call.php",
                //         //         type: "POST",
                //         //         async: false,
                //         //         data: {
                //         //             username: username,
                //         //         }
                //         //         .done(function(data, textStatus, jqXHR) {

                //         //             obj = JSON.parse(data);

                //         //         })
                //         //     });
                //         // });
                // $(document).ready(function() {
                //     var val = "Hi";

                //     $.ajax({
                //         type: "POST",
                //         url: "/stream2/call.php",
                //         dataType: "json",
                //         data: {
                //             val: val
                //         },
                //         success: function(result) {
                //             // alert("Hi, testing");
                //             // alert(result);
                //             if (data.code == "200") {
                //                 alert("Success: " + data.msg);
                //             } else {
                //                 alert("error")
                //             }
                //         }
                //     });

                // });




            });
        });
    </script>

</body>

</html>