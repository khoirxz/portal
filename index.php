<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/semantic.css" />
	<title>Portal SMK N RENGEL</title>
    <style>
        .header-text {
            text-align: center;
        }
        .jarak-nduwur {
            margin-top: 20px;
        }
        .jarak-down {
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="jarak-nduwur">
    
    </div>
    <header class="header-text">
    <div class="ui centered grid">
        <div class="container">
            <img src="image/rengel.png" class="ui centered small image" />
            <h3>Selamat datang diportal</h3>
            <h2>SMK NEGERI RENGEL</h2>
        </div>
    </div>
    </header>
    
    <div class="jarak-down">
        
    </div>
    <!-- END header -->
    <div class="ui container">
        <div class="ui grid container">
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">
                                    <a href="#!">Kunjungi</a>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <img src="icons/radio.svg">
                        </div>
                        <div class="content">
                          <a class="header" href="#!">Radio</a>
                          <div class="meta">
                            <span class="description">Dengar radio online</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">
                                    <a href="#!">Kunjungi</a>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <img src="icons/buku.svg">
                        </div>
                        <div class="content">
                          <a class="header" href="#!">E-Book</a>
                          <div class="meta">
                            <span class="description">Baca Buku Online</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">
                                    <a href="#!">Kunjungi</a>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <img src="icons/cloud.svg">
                        </div>
                        <div class="content">
                          <a class="header" href="#!">Next Cloud</a>
                          <div class="meta">
                            <span class="description">Upload berkas anda disini</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">
                                    <a href="#!">Kunjungi</a>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <img src="icons/learning.svg">
                        </div>
                        <div class="content">
                          <a class="header" href="#!">Moodle</a>
                          <div class="meta">
                            <span class="description">E-learning</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="ui grid container">
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">
                                    <a href="#!">Kunjungi</a>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <img src="icons/chat.svg">
                        </div>
                        <div class="content">
                          <a class="header" href="#!">Chat Room</a>
                          <div class="meta">
                            <span class="description">Ruang percakapan Bebas</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="four wide column">
            6
            </div>
            <div class="four wide column">
            7
            </div>
            <div class="four wide column">
            8
            </div>
        </div>
    </div>
</body>
<script src="asset/jquery-3.2.1.js"></script>
<script src="asset/semantic.js"></script>
<script>
$(document).ready(function(){
    $('.special.cards .image').dimmer({
        on: 'hover'
    });
});
</script>
</html>