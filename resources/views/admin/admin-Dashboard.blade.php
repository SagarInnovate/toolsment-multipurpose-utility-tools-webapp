@extends('layouts.admin-main')
@section('name')
    {{ 'dashboard' }}
@endsection
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Recent Users">
    <meta name="description" content="">
    <meta name="robots" content="noindex">
    <title>admin-Dashboard</title>
    <link rel="stylesheet" href="{{ css_path('admin-Dashboard.css', 'admin') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">





    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin-Dashboard">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection

@section('main-section')
    <section class="u-clearfix u-gradient u-section-2" id="sec-d71a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div
                                    class="u-align-center u-container-style u-layout-cell u-radius-30 u-shape-round u-size-15 u-white u-layout-cell-1">
                                    <div class="u-container-layout u-container-layout-1">
                                        <p class="u-large-text u-text u-text-variant u-text-1">Total unique visitors</p>
                                        <p class="u-small-text u-text u-text-variant u-text-2">1000</p>
                                    </div>
                                </div>
                                <div
                                    class="u-align-center u-container-style u-layout-cell u-radius-30 u-shape-round u-size-15 u-white u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-2">
                                        <p class="u-large-text u-text u-text-variant u-text-3">total page view</p>
                                        <p class="u-small-text u-text u-text-variant u-text-4">1000</p>
                                    </div>
                                </div>
                                <div
                                    class="u-align-center u-container-style u-layout-cell u-radius-30 u-size-15 u-white u-layout-cell-3">
                                    <div class="u-container-layout u-container-layout-3">
                                        <p class="u-large-text u-text u-text-variant u-text-5">Total Register Users</p>
                                        <p class="u-small-text u-text u-text-variant u-text-6">1000</p>
                                    </div>
                                </div>
                                <div
                                    class="u-align-center u-container-style u-layout-cell u-radius-30 u-size-15 u-white u-layout-cell-4">
                                    <div class="u-container-layout u-container-layout-4">
                                        <p class="u-large-text u-text u-text-variant u-text-7">Total Tools</p>
                                        <p class="u-small-text u-text u-text-variant u-text-8">1000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-container-style u-layout-cell u-radius-30 u-size-20 u-white u-layout-cell-5">
                                    <div class="u-container-layout u-valign-middle u-container-layout-5">
                                        <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-1">
                                            <div class="u-container-layout u-valign-middle u-container-layout-6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-30 u-size-20 u-white u-layout-cell-6">
                                    <div class="u-container-layout u-valign-middle u-container-layout-7">
                                        <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-2">
                                            <div class="u-container-layout u-container-layout-8"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-30 u-size-20 u-white u-layout-cell-7">
                                    <div class="u-container-layout u-valign-middle u-container-layout-9">
                                        <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-3">
                                            <div class="u-container-layout u-valign-middle u-container-layout-10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-3" id="sec-258d">
        <h1 class="u-text u-text-body-alt-color u-text-1">Recent Users</h1>
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="5.4%">
                    <col width="17.2%">
                    <col width="50.6%">
                    <col width="15%">
                    <col width="11.8%">
                </colgroup>
                <thead class="u-align-center u-black u-table-header u-table-header-1">
                    <tr style="height: 48px;">
                        <th class="u-border-1 u-border-black u-table-cell">Sr.no</th>
                        <th class="u-border-1 u-border-black u-table-cell">Username</th>
                        <th class="u-border-1 u-border-black u-table-cell">Name</th>
                        <th class="u-border-1 u-border-black u-table-cell">Update&nbsp;</th>
                        <th class="u-border-1 u-border-black u-table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody class="u-align-center u-table-body u-white u-table-body-1">
                    <tr style="height: 77px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">1</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-1"
                                href="user-registartion.html" data-page-id="649211856">update</a>
                        </td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-2"
                                href="#">Delete</a>
                        </td>
                    </tr>
                    <tr style="height: 78px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">2</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12"></td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-13">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-14">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-3"
                                href="user-registartion.html" data-page-id="649211856"> update</a>
                        </td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-15">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-4"
                                href="#">Delete</a>
                        </td>
                    </tr>
                    <tr style="height: 78px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-16">3</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-17">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-18">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-19">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-5"
                                href="user-registartion.html" data-page-id="649211856"> update</a>
                        </td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-20">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-6"
                                href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-4" id="carousel_20bb">
        <h1 class="u-text u-text-body-alt-color u-text-1">Recent Tools</h1>
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="4.9%">
                    <col width="38.7%">
                    <col width="29.3%">
                    <col width="13.5%">
                    <col width="13.6%">
                </colgroup>
                <thead class="u-align-center u-black u-table-header u-table-header-1">
                    <tr style="height: 48px;">
                        <th class="u-border-1 u-border-black u-table-cell">Sr.no</th>
                        <th class="u-border-1 u-border-black u-table-cell">Toolname</th>
                        <th class="u-border-1 u-border-black u-table-cell">Category</th>
                        <th class="u-border-1 u-border-black u-table-cell">Is Register</th>
                        <th class="u-border-1 u-border-black u-table-cell">Update&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="u-align-center u-table-body u-white u-table-body-1">
                    <tr style="height: 77px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">1</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">Y</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-1"
                                href="admin-add_new_tool.html" data-page-id="309926839">update</a>
                        </td>
                    </tr>
                    <tr style="height: 78px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">2</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12"></td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-13">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-14">N</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-15">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-2"
                                href="admin-add_new_tool.html" data-page-id="309926839"> update</a>
                        </td>
                    </tr>
                    <tr style="height: 78px;">
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-16">3</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-17">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-18">Description</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-19">N</td>
                        <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-20">
                            <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-3"
                                href="admin-add_new_tool.html" data-page-id="309926839"> update</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
