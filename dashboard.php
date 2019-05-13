<?php
/**
 * Created by PhpStorm.
 * User: Samfield
 * Date: 12/05/2019
 * Time: 7:47 PM
 */

include_once "inc/header.php";

?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Inventory List</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Ratio</h4>
                        <div class="sales ct-charts mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5">Referral Earnings</h5>
                        <h3 class="font-light">$769.08</h3>
                        <div class="m-t-20 text-center">
                            <div id="earnings"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Users</h4>
                        <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                        <div class="m-t-30">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <h4 class="m-b-0">58%</h4>
                                    <span class="font-14 text-muted">New Users</span>
                                </div>
                                <div class="col-6">
                                    <h4 class="m-b-0">42%</h4>
                                    <span class="font-14 text-muted">Repeat Users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <h4 class="card-title">Latest update</h4>
                        </li>
                        <li class="breadcrumb-item" aria-current="page"><h4 class="label label-success label-boxed"> <a href="form-basic.html">Add new</a></h4></li>
                    </ol>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="border-top-0">INVENTORY NAME</th>
                                <th class="border-top-0">STATUS</th>
                                <th class="border-top-0">LOCATION</th>
                                <th class="border-top-0">QUANTITY</th>
                                <th class="border-top-0">DESCRIPTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="txt-oflo">ROUTER</td>
                                <td><span class="label label-success label-rounded">GOOD</span> </td>
                                <td class="txt-oflo">Software Lab</td>
                                <td><span class="font-medium">2</span></td>
                                <td class="txt-oflo">Cisco Mini Router</td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">FAN</td>
                                <td><span class="label label-purple label-rounded">FAIR</span> </td>
                                <td class="txt-oflo">Amadi's Office</td>
                                <td><span class="font-medium">2</span></td>
                                <td class="txt-oflo">Standing mettalic OX fan.</td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">COMPUTERS</td>
                                <td><span class="label label-purple label-rounded">FAIR</span></td>
                                <td class="txt-oflo">Software Lab</td>
                                <td><span class="font-medium">30</span></td>
                                <td class="txt-oflo">Desktop Computers</td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">COMPUTERS</td>
                                <td><span class="label label-success label-rounded">FAIR</span></td>
                                <td class="txt-oflo">Software Lab</td>
                                <td><span class="font-medium">30</span></td>
                                <td class="txt-oflo">Desktop Computers</td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">COMPUTERS</td>
                                <td><span class="label label-purple label-rounded">FAIR</span></td>
                                <td class="txt-oflo">Software Lab</td>
                                <td><span class="font-medium">30</span></td>
                                <td class="txt-oflo">Desktop Computers</td>
                            </tr>
                            <tr>
                                <td class="txt-oflo">FANS</td>
                                <td><span class="label label-red label-rounded">BAD</span></td>
                                <td class="txt-oflo">Software Lab</td>
                                <td><span class="font-medium">4</span></td>
                                <td class="txt-oflo">Standing Ox fans</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once "inc/footer.php";?>

