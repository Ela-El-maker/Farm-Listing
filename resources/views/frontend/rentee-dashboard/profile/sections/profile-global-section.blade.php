<div class="tab-pane fade" id="pills-advance" role="tabpanel" aria-labelledby="pills-advance-tab">
    <form action="" method="post">
        <div class="dashboard-post__step02 step-information">

            <div class="input-field__group">

                <div class="input-field">
                    <label for="website">Website Link <span>(optional)</span></label>
                    <input type="text" name="website" placeholder="your website url" id="website" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-select">
                        <label>country</label>
                        <select class="form-control js-example-basic-single w-100" name="country">
                            <option value="01">country 01</option>
                            <option value="02">country 02</option>
                            <option value="03">country 03</option>
                            <option value="04">country 04</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-field__group">
                        <div class="input-select">
                            <label>city</label>
                            <select class="js-example-basic-single w-100" name="city">
                                <option value="01">city 01</option>
                                <option value="02">city 02</option>
                                <option value="03">city 03</option>
                                <option value="04">city 04</option>
                            </select>
                        </div>
                        <div class="input-select">
                            <label>state <span>(optional)</span> </label>
                            <select class="form-control js-example-basic-single w-100" name="state">
                                <option value="01">state 01</option>
                                <option value="02">state 02</option>
                                <option value="03">state 03</option>
                                <option value="04">state 04</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-field--textarea">
                <label for="description">Biography</label>
                <textarea name="bio" placeholder="What’s your thought..." id="editor"></textarea>
            </div>
        </div>
        <button type="submit" class="btn">
            Save Changes
        </button>
    </form>
</div>
