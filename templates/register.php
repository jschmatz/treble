<section class="register_form">
    <h1>Register</h1>
    <form action="/register" method="POST">
        <div class="col-xs-6 col-xs-offset-5">
            <div class="col-xs-16">
                <fieldset>
                    <label class="col-xs-16 row" for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="" placeholder="Enter Email Address" />
                </fieldset>
                <fieldset>
                    <label class="col-xs-16 row" for="password">Password</label>
                    <input class="form-control" type="password" name="password" value="" placeholder="Enter Password" />
                </fieldset>
                <fieldset>
                    <label class="col-xs-16 row" for="password_confirm">Confirm Password</label>
                    <input class="form-control" type="text" name="password_confirm" value="" placeholder="Confirm Password" />
                </fieldset>
            </div>
        </div>
        <div id="form-end" class="col-xs-10 col-xs-offset-3">
            <div class="col-xs-16">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus nunc vel tempus molestie. Donec hendrerit nisl sem, eu pulvinar felis tincidunt porttitor. Vivamus vitae nunc a quam pulvinar venenatis. Quisque a ligula non tortor convallis tempus. Proin eget dapibus felis, non mattis ex. Etiam in varius nunc. Vestibulum vitae vestibulum neque. Duis scelerisque, ipsum a ullamcorper mollis, urna massa feugiat velit, quis scelerisque lacus metus sit amet arcu. Maecenas feugiat sollicitudin tellus, nec eleifend diam condimentum quis.</p>
            </div>
            <div class="col-xs-6 col-xs-offset-5">
                <fieldset>
                    <input class="col-xs-1 form-control" type="checkbox" name="accept_conditions" />
                    <label class="col-xs-15" for="accept_conditions">I accept the terms and conditions.</label>
                </fieldset>
                <fieldset>
                    <input class="form-control col-xs-12 col-xs-offset-2" type="submit" value="Register" />
                </fieldset>
            </div>
        </div>
    </form>
</section>