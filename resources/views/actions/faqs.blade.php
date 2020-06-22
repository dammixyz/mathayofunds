@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-20 res-m-bttm">
                    <h4>Our Frequently Asked <span>Questions</span></h4>
                    <p>Here are answers to the questions asked frequently by our customers</p>
                    <hr>
                    <!-- Accordion -->
                    <div class="panel-group accordion pb-20" id="another" role="tablist" aria-multiselectable="true">
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i1">
                                <h6 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
                                        Is this app free to use for business or commercial use ?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i1">
                                <div class="panel-body">
                                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                                </div>
                            </div>
                        </div>
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i2">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
                                        How do i make a support request with this app?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
                                <div class="panel-body">
                                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                                </div>
                            </div>
                        </div>
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i3">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
                                        How and where can we download latest update ?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
                                <div class="panel-body">
                                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                                </div>
                            </div>
                        </div>
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i4">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
                                        Is there any premium version with extended features ?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4">
                                <div class="panel-body">
                                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i5">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i5" aria-expanded="false">
                                        Where do i find any details documentation ?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i5">
                                <div class="panel-body">
                                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->
                    </div><!-- Accordion #end -->
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
@endsection

