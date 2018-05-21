<form action="" method="post" class="row form add_discount_page" name="add_discount_form">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="table-items">
            <!-- DISCOUNT CODE -->
            <div class="form-field form--field__withbtn clearfix">
                <h4 class="strong">Discount Code</h4>
                <a href="#" class="link gen_code">Generate Code</a>
                <input type="text" name="discount_code" id="discount_code" class="form-control" required>
                <small>Customers will enter this discount code at checkout.</small>
            </div>
            <hr>
            <!-- OPTIONS -->
            <h4 class="strong">Options</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-field">
                        <label for="disc_type">Discount Type</label>
                        <select name="disc_type" id="disc_type" class="form-control">
                            <option value="perc_value" data-toggle="appliesto_item">Percentage discount</option>
                            <option value="perc_value" data-toggle="appliesto_item">Fixed Amount</option>
                            <option value="perc_value" data-toggle="countries_item">Free Shipping</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-field">
                        <label for="disc_type">Discount Type</label>
                        <input type="text" id="disc_type" name="disc_type" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-field">
                        <label for="min_pursh">This discount requires a minimum purchase</label>
                        <input type="checkbox" name="min_pursh" id="min_pursh">
                    </div>
                </div>
            </div>
            <hr>
            <!-- APPLIES TO -->
            <div class="form-toggle">
                <div class="appliesto_item item active">
                    <h4 class="strong">Applies to</h4>
                    <div class="form-field">
                        <label for="entire_order">Entire Order</label>
                        <input type="radio" name="appliesto_item" id="entire_order">
                    </div>
                    <div class="form-field">
                        <label for="spec_collec">Specific Collections</label>
                        <input type="radio" name="appliesto_item" id="spec_collec">
                    </div>
                    <div class="form-field">
                        <label for="spec_prod">Specific Products</label>
                        <input type="radio" name="appliesto_item" id="spec_prod">
                    </div>
                </div>
                <div class="countries_item item">
                    <h4 class="strong">Countries</h4>
                    <div class="form-field">
                        <label for="all_countr">All Countries</label>
                        <input type="radio" name="countries_item" id="all_countr">
                    </div>
                    <div class="form-field">
                        <label for="spec_contr">Specific Countries</label>
                        <input type="radio" name="countries_item" id="spec_contr">
                    </div>
                    <br>
                    <h4 class="strong">Shipping Rates</h4>
                    <div class="form-field">
                        <label for="shippi_rate">Exclude shipping rates over a certain amount</label>
                        <input type="checkbox" name="shippi_rate" id="shippi_rate">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-lg-3">
                                <input type="text" name="shippi_rate_amount" id="shippi_rate_amount" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- COSTUMER ELIGIBILITY -->
            <h4 class="strong">Costumer Eligibility</h4>
            <div class="form-field">
                <label for="everyone">Everyone</label>
                <input type="radio" name="costumer_eligibility" value="everyone" id="everyone">
            </div>
            <div class="form-field">
                <label for="spec_group_costumers">Specific group of costumers</label>
                <input type="radio" name="costumer_eligibility" value="spec_group_costumers" id="spec_group_costumers">
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field">
                <span class="fleft">Status</span>
                <div class="switch fright">
                    <input type="checkbox" class="btsp-check" name="status_item">
                    <span class="toggle toggle--round"></span>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="content">
                <p>
                    <strong>SUMMARY</strong>
                </p>
                <br>
                <div class="content__in">
                    <p class="fleft">Discount Name</p>
                    <span class="fright status status--warn">INACTIVE</span>
                    <div class="clearfix"></div>
                    <div class="form-field">
                        <ul class="bullet-list">
                            <li>
                                <span>0% off entire order</span>
                            </li>
                            <li>
                                <span>Minimum purchase of €55,00</span>
                            </li>
                            <li>
                                <span>
                                    Active from Jan 26
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="content">
                <p>
                    <strong>PERFORMANCE</strong>
                </p>

                <div class="form-field content__in">
                    <ul class="bullet-list">
                        <li>
                            <span>8 used</span>
                        </li>
                        <li>
                            <span>€760,00 in total sales</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>