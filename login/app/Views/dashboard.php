<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Hello, <?= session()->get('firstname') ?></h1>

            <h3>The Questions</h3>

            <form class="" action="/dashboard" method="post">
                <div class="form-group">
                    <label for="firstquestion">What is ci4 stand for?</label>
                    <input type="text" class="form-control" name="firstquestion" id="firstquestion" placeholder="answer">
                </div>
                <div class="form-group">
                    <label for="secondquestion">PHP version of 7.2 or newer is required when using ci4.</label>
                    <select class="form-control" name="secondquestion" id="secondquestion">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    <!-- <input type="submit" name="submit" value="Choose option"> -->
                   
                </div>
                <div class="form-group">
                    <label for="thirdquestion">List the current supported databases of server requirements in ci4.</label>
                    <textarea class="form-control" name="thirdquestion" id="thirdquestion" rows="3"></textarea>
                </div>
                <div class="form-group">
                        <label>How likely is that you like this ci4?</label>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                            <label>Unlikely</label>
                                <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>
                                <label>Very Likely</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-8 mt-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>