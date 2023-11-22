@extends('layouts.nav')

@section('donate-bg')
    <div id="donate-bg-section" class="donate-bgcover">
        <img src="{{ asset('images/trash.jpeg') }}" alt="Your Image Description">
        <div class="overlay">
            <div class="paragraph-for-donations">
                 <h3> YOU MAKE IT POSSIBLE  </h3>
                <p><b>TINDAHAN</b> is not just your ordinary e-commerce clothing store;
                 it's a brand with a heart, seamlessly blending fashion with compassion.
                 At Tindahan, every purchase goes beyond the transaction, symbolizing a 
                commitment to both style and social responsibility. Setting itself apart,
                Tindahan welcomes clothing donations, allowing customers to convert their
                gently used garments into valuable points. This innovative approach
                transforms the act of shopping into a meaningful contribution, fostering a
                 community-driven ethos. Tindahan is not just about dressing well; it's
                about dressing with purpose, making a positive impact on both wardrobes and lives.</p>

                <h5> BE A BEACON OF CHANGE , RECYCLE CLOTHES ONE AT A TIME</h5>
                  <button class="donate-button">Donate here</button>
            </div>
           
        </div>
    </div>
@endsection
