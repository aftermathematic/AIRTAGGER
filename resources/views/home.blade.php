@extends('layouts.master')

@section('content')
<!-- START ABOUT -->

<div class="row featurette">

    <div class="col text-center mt-4">


        <p class="lead">
            Airtagger is your own personal history keeper for all your Apple Airtags.<br />
            Building further upon the breakthrough work done by <a href="https://github.com/icepick3000/AirtagAlex"
                target="_blank">Airtag Alex</a>.
        </p>

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <img src="/images/airtaggermap.png" class="img-fluid my-4">
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col-6">

                <h2>How does Airtagger work?</h2>

                <p class="lead">
                    Airtagger is a small shell script running on your Mac computer, which logs all movement changes from
                    your Airtags in a CSV file. This CSV file can be uploaded here, and a detailed map of all recent
                    positions can be consulted.<br />
                </p>
                <p class="fs-5 fw-bold">
                    To get your Airtagger working, take following steps:<br />

                <ul class="list-group">
                    <li class="list-group-item">
                        Create a new folder "Airtagger" on your Mac desktop.
                    </li>

                    <li class="list-group-item">
                        Download the Airtagger script and place the file in this folder.

                        <div class="row">
                            <div class="col"></div>
                            <div class="col-3">
                                <a href="/files/Airtagger.sh" target="_blank">
                                    <img src="/images/download.png" class="img-fluid my-4">
                                </a>
                            </div>
                            <div class="col"></div>
                        </div>


                    </li>

                    <li class="list-group-item">
                    Open your terminal, go to your Airtagger folder by typing "<code>cd desktop/Airtagger</code>".<br/>
                    Update the file permissions of your script by typing "<code>chmod 755 Airtagger.sh</code>"
                    </li>

                    <li class="list-group-item">
                    Open your '<strong>Find My</strong>' app and keep it open at all times while the script is running. This is crucial!
                    </li>

                    <li class="list-group-item">
                    In your terminal, type "<code>./Airtagger.sh</code>" to start your Airtagger script. The script will automatically reload every 30 seconds, and when a new position of an Airtag is discovered, a new line is added to the Airtagger.csv file.
                    </li>

                    <li class="list-group-item">
                    Whenever you want to update your history, upload the Airtagger.csv file on the <a href="/upload">upload</a> page in your user profile. You need to be registered and logged in for this.
                    </li>




                </ul>

                </p>
            </div>
            <div class="col"></div>
        </div>


    </div>
</div>

<!-- END ABOUT -->
@endsection

@section('scripts')

<script>

</script>

@endsection