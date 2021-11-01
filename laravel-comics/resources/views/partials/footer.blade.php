<!-- inizio sezione footer -->
<footer>
    
    <!-- inizio sezione sinistra footer -->
    <section id="sx-footer">
        @foreach($footer_list as $list)
        <div>

            <a href="{{ route('footer', ['id' => $loop ->index]) }}">
            <p>{{ $list['titolo'] }}</p>
            </a>

        </div>
    @endforeach

         <div class="elenco-footer">

         </div>

         <div class="elenco-footer">

         </div>

         <div class="elenco-footer">

         </div>

    </section>

    <!-- inizio sezione destra footer -->

</footer>