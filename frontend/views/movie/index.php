
<?php
use yii\web\View;


$this->registerJs("
$('#nav').affix({
    offset: {
        top: $('#nav').offset().top - 50,
        bottom: 100
    }
});

$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 60
    }, 500);
    return false;
});

$('body').scrollspy({ 
	target: '.scrollspy',
	offset: 200
});

", View::POS_READY);

$this->registerCss("
.affix {
  top: 50px;
  width: 213px;
}

@media (min-width: 1200px) {
  .affix {
    width: 263px;
  }      
}

.nav .active {
  font-weight: bold;
}

.nav .nav {
  display: none;
}

.nav .active .nav {
  display: block;
}

.nav .nav a {
  font-weight: normal;
  font-size: .85em;
}

.nav .nav span {
  margin: 0 5px 0 2px;
}

.nav .nav .active a,
.nav .nav .active:hover a,
.nav .nav .active:focus a {
  font-weight: bold;
  padding-left: 30px;
  border-left: 5px solid black;
}

.nav .nav .active span,
.nav .nav .active:hover span,
.nav .nav .active:focus span {
  display: none;
}

.backdrop{
  background-image : url('http://image.tmdb.org/t/p/original".$movie->image[0]->path."');
  background-color: black;
  background-size: cover;
  background-position: 50% 10%;
  transition: all .5s;
  height: 600px;
  color: #000;
  position: relative;
  
}

.image-fade{
  position: absolute;
  width: 100%;
  height: 30%;
  bottom:0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
}

.wrap > .container{
  padding: 0;
}

.summary{
  width: 100%;
  position: absolute;
  bottom: 0;
  z-index:99;
}
");


?>
<div class="container-fluid">
  <div class="row">
      <div class="backdrop">
        <div class="image-fade"></div>
        <div class="summary">
          
          <div class="container"> 
            <div class="row">
              <div class="col-md-9 col-md-offset-3">
                <div class="summary-detail">
                  <h1><?= $movie->title ?> <small><?= !empty($movie->release) ? date('Y', $movie->release) : '' ?></small></h1>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>  
  </div>
</div>

<div class="container">
  <div class="row">
  	<div class="col-md-3 scrollspy"> 
  		<div id="nav" class="hidden-xs hidden-sm affix-top" data-spy="affix">
  			<div class="poster">
  				<img style="width: 180px;margin-top: 20px;" class="real" src="https://walter.trakt.us/images/movies/000/102/924/posters/thumb/af119b8d07.jpg" alt="Af119b8d07">
  			</div>
  			<ul class="nav">
  				<li class=""><a href="#web-design">Web Design</a></li>
  				<li class=""><a href="#web-development">Web Development</a>
  					<ul class="nav">
  						<li class=""><a href="#ruby"><span class="fa fa-angle-double-right"></span>Ruby</a></li>
  						<li class=""><a href="#python"><span class="fa fa-angle-double-right"></span>Python</a></li>
  						<li class=""><a href="#php"><span class="fa fa-angle-double-right"></span>PHP</a></li>
  					</ul>
  				</li>
  				<li class=""><a href="#marketing">Marketing</a></li>
  				<li class=""><a href="#graphic-design">Graphic Design</a></li>
  				<li class=""><a href="#logistics">Logistics</a></li>
  				<li class=""><a href="#social">Social</a></li>
  				<li class=""><a href="#management">Management</a></li>
  				<li class=""><a href="#chemistry">Chemistry</a></li>
  				<li class=""><a href="#mobile-development">Mobile Development</a>
  					<ul class="nav">
  						<li class=""><a href="#android"><span class="fa fa-angle-double-right"></span>Android</a></li>
  						<li class=""><a href="#iOS"><span class="fa fa-angle-double-right"></span>iOS</a></li>
  					</ul>
  				</li>
  				<li class=""><a href="#mathematics">Mathematics</a></li>
  			</ul>
  		</div>
  	</div>



<div class="col-md-9">
        <section id="web-design">
          <h2><span class="fa fa-edit"></span> Web Design</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc,
            blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #web-design-->

        <section id="web-development">
          <h2><span class="fa fa-edit"></span> Web Development</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc. Etiam ultricies nisi vel augue.
            Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.Nam
            quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>

          <section id="ruby">
            <h3>Ruby</h3>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <button type="button" class="btn btn-primary">Learn More</button>
          </section><!--end of #ruby-->

          <section id="python">
            <h3>Python</h3>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <button type="button" class="btn btn-primary">Learn More</button>
          </section><!--end of #python-->

          <section id="php">
            <h3>PHP</h3>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <button type="button" class="btn btn-primary">Learn More</button>
          </section><!--end of #php-->
        </section><!--end of #web-devlopment-->

        <section id="marketing">
          <h2><span class="fa fa-edit"></span> Marketing</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
            Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
            adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #marketing-->

        <section id="graphic-design">
          <h2><span class="fa fa-edit"></span> Graphic Design</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc. Etiam ultricies nisi vel augue.
            Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #graphic-design-->

        <section id="logistics">
          <h2><span class="fa fa-edit"></span> Logistics</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #logistics-->

        <section id="social">
          <h2><span class="fa fa-edit"></span> Social</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>
          <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris
            sit amet nibh. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #social-->

        <section id="management">
          <h2><span class="fa fa-edit"></span> Management</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
            Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
            adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #management-->

        <section id="chemistry">
          <h2><span class="fa fa-edit"></span> Chemistry</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #chemistry-->

        <section id="mobile-development">
          <h2><span class="fa fa-edit"></span> Mobile Development</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc. Etiam ultricies nisi vel augue.
            Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>

          <section id="android">
            <h3>Android Development</h3>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
            luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <button type="button" class="btn btn-primary">Learn More</button>
          </section><!--end of #android-->

          <section id="iOS">
            <h3>iOS Development</h3>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem.
            </p>
            <button type="button" class="btn btn-primary">Learn More</button>
          </section><!--end of #iOS-->
        </section><!--end of #mobile-development-->
        
        <section id="mathematics">
          <h2><span class="fa fa-edit"></span> Mathematics</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc. Etiam ultricies nisi vel augue.
            Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
            massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
          </p>
          <button type="button" class="btn btn-primary">Learn More</button>
        </section><!--end of #mathematics-->
      </div>
	</div>

</div>
