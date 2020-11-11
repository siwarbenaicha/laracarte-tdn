@extends('layouts.default')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> {{--prendre 8 colonnaes et laisser 2 a gauche et 2 a droite //md:ecran moyen u plus//sm:tablette ou mobile (c bootstrap) --}}
                <h2>Get in touch</h2>
                <p class="text-muted">if you having trouble with this service <a href="mailto:benaichasiwar@gmail.com"> please ask for help</a>. </p>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label> {{--sr-only:seulement pour les screen readers --}}
                        <textarea type="text" name="message" id="message" class="form-control" required="required" rows="10" cols="10"> </textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>

                </form>
            </div>

        </div>

    </div>
@stop
