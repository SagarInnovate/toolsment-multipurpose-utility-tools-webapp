@section('name')
    {{ 'comments' }}
@endsection
@extends('layouts.admin-main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Blog">
    <meta name="description" content="">
    <title>admin-Comment</title>
    <link rel="stylesheet" href="{{ css_path('admin-Comment.css', 'admin') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin-Comment">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection


@section('main-section')
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-4a98">
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="3.5%">
                    <col width="19.5%">
                    <col width="28.5%">
                    <col width="32.8%">
                    <col width="12.3%">
                    <col width="3.400000000000003%">
                </colgroup>
                <thead class="u-align-center u-black u-table-header u-table-header-1">
                    <tr style="height: 37px;">
                        <th class="u-border-1 u-border-black u-table-cell">Sr.no</th>
                        <th class="u-border-1 u-border-black u-table-cell">Username</th>
                        <th class="u-border-1 u-border-black u-table-cell">Content</th>
                        <th class="u-border-1 u-border-black u-table-cell">Post Title</th>
                        <th class="u-border-1 u-border-black u-table-cell">reply</th>
                        <th class="u-border-1 u-border-black u-table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody class="u-align-center u-table-body u-white u-table-body-1">
                    <tr style="height: 52px;">
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-7">1</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-8">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-9">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-10">3</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-11">
                            <a class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"
                                href="admin-comment_reply.html" data-page-id="2309726728">reply</a>
                        </td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-12">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-2"
                                href="#">Delete</a>
                        </td>
                    </tr>
                    <tr style="height: 52px;">
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-13">2</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-14"></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-15">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-16">5</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-17">
                            <a class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3"
                                href="admin-comment_reply.html" data-page-id="2309726728">reply</a>
                        </td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-18">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-4"
                                href="#">Delete</a>
                        </td>
                    </tr>
                    <tr style="height: 52px;">
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-19">3</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-20">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-21">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-22">6</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-23">
                            <a class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-5"
                                href="admin-comment_reply.html" data-page-id="2309726728">reply</a>
                        </td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-24">
                            <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-6"
                                href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
