<section class="appointment" id="contact">
    <div class="appointment-wrap">
        <figure>
            <img class="lazyload" data-src="/assets/pictures/DCM_0010-pichi.png" alt="" />
        </figure>
        <div class="appointment-form">
            <form method="POST" action="{{ route('mail.appointment') }}">
                @csrf
                @honeypot
                <div class="form-field half-width">
                    <input type="text" name="name" placeholder="Naam" minlength="2" maxlength="50" required />
                    <input type="email" name="email" placeholder="E-mailadres" minlength="5" maxlength="100"  required />
                </div>
                <div class="form-field half-width">
                    <div class="select-field">
                        <select  name="procedure" required>
                            <option value="" disabled selected>Selecteer behandeling</option>
                            <option value="pedicure">Pedicure</option>
                            <option value="spabehandeling">Spabehandeling</option>
                        </select>
                    </div>
                    <input type="tel" name="phone" placeholder="Telefoonnummer" required/>
                </div>
                <div class="form-field">
                    <textarea name="message" placeholder="Opmerking" maxlength="350"></textarea>
                </div>
                <div class="form-field flex">
                    Door op deze checkbox te klikken, gaat u akkoord met onze <a target="_blank" href="{{ route('privacy') }}">privacyverklaring</a>.
                    <div style="width: 50px; margin-top: 10px;">
                        <input class="py-2 px-2" type="checkbox" name="opt_in" value="1" required/>
                    </div>
                </div>
                <input type="submit" class="btn btn-round" value="Versturen">
            </form>
        </div>
    </div>
</section>
