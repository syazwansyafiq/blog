@extends('shared.layouts.app')

@section('content')   
<section id="tickets" class="container">
    <div class="row">
        <h1 class='section_head'>
            Tickets
        </h1>
    </div>
    <form method="POST" action="/order/create" >
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="tickets_table_wrap">
                        <table class="table">
                            <tr class="ticket" property="offers" typeof="Offer">
                                @foreach($tickets as $ticket)
                                <td>
                                    <span class="ticket-title semibold" property="name">
                                        @if($ticket->id == 1)
                                           Free Ticket
                                        @else
                                           General
                                        @endif
                                    </span>
                                    <p class="ticket-descripton mb0 text-muted" property="description">
                                        {{ $ticket->description }}
                                    </p>
                                </td>
                                <td style="width:180px; text-align: right;">
                                    <div class="ticket-pricing" style="margin-right: 20px;">
                                        RM{{ $ticket->price }}
                                        <meta property="price" content="0">
                                    </div>
                                </td>
                                <td style="width:85px;">
                                    <input name="tickets[]" type="hidden" value="909">
                                    <meta property="availability" content="http://schema.org/InStock">
                                    <select name="ticket_909" class="form-control" style="text-align: center">
                                        @for($i=0; $i<=$ticket->quantity; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="checkout">
                                <td colspan="3">
                                    <div class="hidden-xs pull-left">
                                        <img class="" src="http://attendize.website/assets/images/public/EventPage/credit-card-logos.png" />
                                        <div class="help-block" style="font-size: 11px;">
                                            Offline Payment Methods Available
                                        </div>
                                    </div>
                                    <input class="btn btn-lg btn-primary pull-right" type="submit" value="Register">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <input name="is_embedded" type="hidden" value="0">
    </form>
</section>    

<section id="details" class="container">
    <div class="row">
        <h1 class="section_head">
            Event Details
        </h1>
    </div>
    <div class="row">
        <div class="col-md-7">
        <div class="content event_details" property="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies sapien. Duis faucibus mi nec blandit facilisis. Morbi mattis ligula ut mattis consequat. Donec maximus, lacus ut lobortis hendrerit, mi elit finibus sem, et elementum neque augue vitae tellus. Donec<strong> cursus fermentum ex, non sodales </strong>urna laoreet id. Vivamus a varius tellus. Maecenas pharetra, augue non commodo commodo, justo eros gravida elit, sed dictum massa massa eu odio. Curabitur tristique massa mattis ipsum pulvinar imperdiet. Nulla elementum orci vitae ante sagittis, eu sollicitudin nisl varius. In id felis in lacus porta placerat. Sed imperdiet dictum nulla, nec porta sem maximus quis. Proin porttitor eu ipsum a fringilla.</p>
            <h2>Title</h2>
            <blockquote>
                <p>Ut suscipit congue ex vel eleifend. Mauris lacinia mauris elit, eget rhoncus mi sagittis et. Duis ornare sem nulla, non malesuada odio pharetra et. In laoreet risus neque, rhoncus dictum ante tincidunt id. Ut a scelerisque lorem. In hac habitasse platea dictumst. Morbi congue lectus lacus, quis efficitur erat suscipit eu. Ut dignissim mi diam, vitae blandit nunc tincidunt id. Integer varius sed dolor quis vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam sodales iaculis viverra. Vivamus vehicula nisi tincidunt tellus ultricies convallis. Suspendisse volutpat risus velit, interdum commodo risus aliquet non. Etiam congue ante nec bibendum molestie. Vestibulum eleifend sollicitudin ligula, ut euismod enim elementum non.</p>
            </blockquote>
            <p>Donec luctus tempor sollicitudin. Proin tincidunt gravida felis vitae gravida. Vestibulum ut sapien nulla. Nunc varius erat ac pellentesque vehicula. Aenean mollis risus non sem volutpat ullamcorper at ac neque. Fusce venenatis neque nec diam maximus auctor. Curabitur sagittis erat augue, id accumsan nisl accumsan pellentesque. Maecenas euismod lectus vel sollicitudin interdum.</p>
            <p>Mauris venenatis, velit pellentesque vulputate pulvinar, massa eros feugiat leo, ut convallis libero nibh non purus. Ut blandit varius justo, porta ullamcorper neque. Suspendisse semper sodales urna eget gravida. Nam ultricies vel orci sed lacinia. Pellentesque vulputate quam non nunc cursus rutrum. Quisque magna purus, lobortis sed posuere vitae, aliquet id ipsum. Ut efficitur scelerisque magna ac congue. Donec faucibus pellentesque dignissim. Vestibulum eget imperdiet ligula, ac egestas nunc. Aenean id ligula quis sem volutpat ultrices. Aliquam ut ipsum semper, molestie arcu ac, pharetra tellus.</p>
            <p>Donec a tempus risus, nec mattis ipsum. Vivamus cursus leo et dolor convallis viverra. Nullam dictum, libero vitae placerat accumsan, mi orci faucibus orci, et porta nisi nisi eu justo. Quisque pharetra massa a feugiat tincidunt. Aenean pretium sed risus ac sollicitudin. Cras quis arcu tempus, aliquet orci id, faucibus purus. Cras sit amet enim id eros suscipit porta. Curabitur molestie eros at erat placerat mollis.</p>
        </div>
    </div>
    <div class="col-md-5">
        <div class="content event_poster">
            <img alt="Sample Event w/ Special Guests" src="http://attendize.website/user_content/event_images/event_image-2d9ed4835dbf40203afb9afbd3014107.jpg" property="image">
        </div>
    </div>
        </div>
</section>    
<section id="share" class="container">
    <div class="row">
        <h1 class="section_head">
            Share Event
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="rrssb-buttons clearfix rrssb-1">

                                <li class="rrssb-facebook" data-initwidth="16.666666666666668" data-size="67" style="width: 16.6667%;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://attendize.website/e/799/sample-event-w-special-guests" class="popup">
                        <span class="rrssb-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                <path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
                                      c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
                                      c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"></path>
                            </svg>
                        </span>
                        <span class="rrssb-text">facebook</span>
                    </a>
                </li>
                                                <li class="rrssb-linkedin" data-initwidth="16.666666666666668" data-size="57" style="width: 16.6667%;">
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://attendize.website/e/799/sample-event-w-special-guests?title=Sample+Event+w%2F+Special+Guests&amp;summary=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies sapien. Duis faucibus mi nec blandit facilisis. Morbi mattis..." class="popup">
                        <span class="rrssb-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                <path d="M25.424,15.887v8.447h-4.896v-7.882c0-1.979-0.709-3.331-2.48-3.331c-1.354,0-2.158,0.911-2.514,1.803
                                      c-0.129,0.315-0.162,0.753-0.162,1.194v8.216h-4.899c0,0,0.066-13.349,0-14.731h4.899v2.088c-0.01,0.016-0.023,0.032-0.033,0.048
                                      h0.033V11.69c0.65-1.002,1.812-2.435,4.414-2.435C23.008,9.254,25.424,11.361,25.424,15.887z M5.348,2.501
                                      c-1.676,0-2.772,1.092-2.772,2.539c0,1.421,1.066,2.538,2.717,2.546h0.032c1.709,0,2.771-1.132,2.771-2.546
                                      C8.054,3.593,7.019,2.501,5.343,2.501H5.348z M2.867,24.334h4.897V9.603H2.867V24.334z"></path>
                            </svg>
                        </span>
                        <span class="rrssb-text">linkedin</span>
                    </a>
                </li>
                                                <li class="rrssb-twitter" data-initwidth="16.666666666666668" data-size="53" style="width: 16.6667%;">
                    <a href="http://twitter.com/intent/tweet?text=Check out: http://attendize.website/e/799/sample-event-w-special-guests Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies sapien. Duis faucibus mi nec blandit facilisis. Morbi mattis..." class="popup">
                        <span class="rrssb-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                <path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
                                      c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
                                      C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
                                      C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
                                      c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
                                      C26.275,7.229,25.39,8.196,24.253,8.756z"></path>
                            </svg>
                        </span>
                        <span class="rrssb-text">twitter</span>
                    </a>
                </li>
                                                <li class="rrssb-googleplus" data-initwidth="16.666666666666668" data-size="59" style="width: 16.6667%;">
                    <a href="https://plus.google.com/share?url=http://attendize.website/e/799/sample-event-w-special-guests" class="popup">
                        <span class="rrssb-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M14.703,15.854l-1.219-0.948c-0.372-0.308-0.88-0.715-0.88-1.459c0-0.748,0.508-1.223,0.95-1.663
                                              c1.42-1.119,2.839-2.309,2.839-4.817c0-2.58-1.621-3.937-2.399-4.581h2.097l2.202-1.383h-6.67c-1.83,0-4.467,0.433-6.398,2.027
                                              C3.768,4.287,3.059,6.018,3.059,7.576c0,2.634,2.022,5.328,5.604,5.328c0.339,0,0.71-0.033,1.083-0.068
                                              c-0.167,0.408-0.336,0.748-0.336,1.324c0,1.04,0.551,1.685,1.011,2.297c-1.524,0.104-4.37,0.273-6.467,1.562
                                              c-1.998,1.188-2.605,2.916-2.605,4.137c0,2.512,2.358,4.84,7.289,4.84c5.822,0,8.904-3.223,8.904-6.41
                                              c0.008-2.327-1.359-3.489-2.829-4.731H14.703z M10.269,11.951c-2.912,0-4.231-3.765-4.231-6.037c0-0.884,0.168-1.797,0.744-2.511
                                              c0.543-0.679,1.489-1.12,2.372-1.12c2.807,0,4.256,3.798,4.256,6.242c0,0.612-0.067,1.694-0.845,2.478
                                              c-0.537,0.55-1.438,0.948-2.295,0.951V11.951z M10.302,25.609c-3.621,0-5.957-1.732-5.957-4.142c0-2.408,2.165-3.223,2.911-3.492
                                              c1.421-0.479,3.25-0.545,3.555-0.545c0.338,0,0.52,0,0.766,0.034c2.574,1.838,3.706,2.757,3.706,4.479
                                              c-0.002,2.073-1.736,3.665-4.982,3.649L10.302,25.609z"></path>
                                        <polygon points="23.254,11.89 23.254,8.521 21.569,8.521 21.569,11.89 18.202,11.89 18.202,13.604 21.569,13.604 21.569,17.004
                                                 23.254,17.004 23.254,13.604 26.653,13.604 26.653,11.89      "></polygon>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="rrssb-text">google+</span>
                    </a>
                </li>
                                                <li class="rrssb-whatsapp" data-initwidth="16.666666666666668" data-size="67" style="width: 16.6667%;">
                   <a style="background-color: #43d854;" href="whatsapp://send?text=Sample+Event+w%2F+Special+Guests+-+http%3A%2F%2Fattendize.website%2Fe%2F799%2Fsample-event-w-special-guests" data-action="share/whatsapp/share">
                        <span class="rrssb-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90"><path d="M90 43.84c0 24.214-19.78 43.842-44.182 43.842a44.256 44.256 0 0 1-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 0 1-6.34-22.637C1.635 19.63 21.415 0 45.818 0 70.223 0 90 19.628 90 43.84zM45.818 6.983c-20.484 0-37.146 16.535-37.146 36.86 0 8.064 2.63 15.533 7.076 21.61l-4.64 13.688 14.274-4.537A37.122 37.122 0 0 0 45.82 80.7c20.48 0 37.145-16.533 37.145-36.857S66.3 6.983 45.818 6.983zm22.31 46.956c-.272-.447-.993-.717-2.075-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.36-1.717-.54-2.438.536-.72 1.076-2.797 3.495-3.43 4.212-.632.72-1.263.81-2.347.27-1.082-.536-4.57-1.672-8.708-5.332-3.22-2.848-5.393-6.364-6.025-7.44-.63-1.076-.066-1.657.475-2.192.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.718.182-1.345-.09-1.884-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.793-2.436-1.793-.63 0-1.353-.09-2.075-.09-.722 0-1.896.27-2.89 1.344-.99 1.077-3.788 3.677-3.788 8.964 0 5.288 3.88 10.397 4.422 11.113.54.716 7.49 11.92 18.5 16.223 11.01 4.3 11.01 2.866 12.996 2.686 1.984-.18 6.406-2.6 7.312-5.107.9-2.513.9-4.664.63-5.112z"></path></svg>
                        </span>
                        <span class="rrssb-text">Whatsapp</span>
                   </a>
                </li>
                                                <li class="rrssb-email" data-initwidth="16.666666666666668" data-size="37" style="width: 16.6667%;">
                    <a href="mailto:?subject=Check This Out&amp;body=http%3A%2F%2Fattendize.website%2Fe%2F799%2Fsample-event-w-special-guests">
                        <span class="rrssb-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><g><path d="M20.111 26.147c-2.336 1.051-4.361 1.401-7.125 1.401c-6.462 0-12.146-4.633-12.146-12.265 c0-7.94 5.762-14.833 14.561-14.833c6.853 0 11.8 4.7 11.8 11.252c0 5.684-3.194 9.265-7.399 9.3 c-1.829 0-3.153-0.934-3.347-2.997h-0.077c-1.208 1.986-2.96 2.997-5.023 2.997c-2.532 0-4.361-1.868-4.361-5.062 c0-4.749 3.504-9.071 9.111-9.071c1.713 0 3.7 0.4 4.6 0.973l-1.169 7.203c-0.388 2.298-0.116 3.3 1 3.4 c1.673 0 3.773-2.102 3.773-6.58c0-5.061-3.27-8.994-9.303-8.994c-5.957 0-11.175 4.673-11.175 12.1 c0 6.5 4.2 10.2 10 10.201c1.986 0 4.089-0.43 5.646-1.245L20.111 26.147z M16.646 10.1 c-0.311-0.078-0.701-0.155-1.207-0.155c-2.571 0-4.595 2.53-4.595 5.529c0 1.5 0.7 2.4 1.9 2.4 c1.441 0 2.959-1.828 3.311-4.087L16.646 10.068z"></path></g></svg>
                        </span>
                        <span class="rrssb-text">email</span>
                    </a>
                </li>
                            </ul>
        </div>
    </div>
</section>
<section id="location" class="container p0">
    <div class="row">
        <div class="col-md-12">
            <div class="google-maps content">
                <iframe frameborder="0" style="border:0;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%2C%2C%2CDublin%2CCounty+Dublin%2C%2CIreland&amp;aq=0&amp;oq=%2C%2C%2CDublin%2CCounty+Dublin%2C%2CIreland&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=%2C%2C%2CDublin%2CCounty+Dublin%2C%2CIreland&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
</section>    
<section id="organiser" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="event_organiser_details" property="organizer" typeof="Organization">
                <div class="logo">
                    <img alt="Test Organiser" src="http://attendize.website/assets/images/logo-dark.png" property="logo">
                </div>
                <h3>
                    <a href="http://attendize.website/o/508/test-organiser" title="Organiser Page">
                        Test Organiser
                    </a>
                </h3>
                <p property="description">
                    Some text describing the organiser. Some text describing the organiser. Some text describing the organiser. 
                </p>
                <p>
                    <a property="sameAs" href="https://fb.com/facebook" class="btn btn-facebook">
                        <i class="ico-facebook"></i>&nbsp; Facebook
                    <a property="sameAs" href="https://twitter.com/" class="btn btn-twitter">
                        <i class="ico-twitter"></i>&nbsp; Twitter
                    </a>
                    <button onclick="$(function(){ $('.contact_form').slideToggle(); });" type="button" class="btn btn-primary">
                        <i class="ico-envelop"></i>&nbsp; Contact
                    </button>
                </p>
                <div class="contact_form well well-sm">
                    <form method="POST" action="http://attendize.website/e/799/contact_organiser" accept-charset="UTF-8" class="reset ajax"><input name="_token" type="hidden" value="nN8NDHtja2sp6ozHiuEKqbPxztIbzH54R5eYkkiR">
                    <h3>Contact
                        <i>Test Organiser</i>
                    </h3>
                    <div class="form-group">
                        <label for="Your Name">Your Name</label>
                        <input required="required" class="form-control" placeholder="Your name" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="Your E-mail Address">Your E-mail Address</label>
                        <input required="required" class="form-control" placeholder="Your e-mail address" name="email" type="text">
                    </div>
                    <div class="form-group">
                        <label for="Your Message">Your Message</label>
                        <textarea required="required" class="form-control" placeholder="Your message" name="message" cols="50" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Send Message">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
        
