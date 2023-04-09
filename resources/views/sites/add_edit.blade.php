@extends('layouts.backend')

@php
    $addEdit = isset($site) ? 'Edit' : 'Add';
    $addUpdate = isset($site) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' site')
@section('content')

    <div class="content content-boxed">
        <site-builder-form
        :slogans="{{ $slogans }}"
        :taglines="{{ $tagLines }}"
        :aboutustitles="{{ $aboutUsTitles }}"
        :aboutuscontent="{{ $aboutUsContent }}"
        :shoptitles="{{ $shopTitles }}"
        :buttonNames="{{ $buttonNames }}"
        :populartitles="{{ $popularTitles }}"
        :contactTitles="{{ $contactTitles }}"
        :contactContent="{{ $contactContent }}"
        :headertemplates="{{ $headerTemplates }}"
        :herosections="{{ $heroSections }}"
        :productsections="{{ $productSections }}"
        :aboutsections="{{ $aboutSections }}"
        :contactsections="{{ $contactSections }}"
        :popularproductsections="{{ $popularProductSections }}"
        :ctasections="{{ $ctaSections }}"
        :featuresections="{{ $featureSections }}"
        :footertemplates="{{ $footerTemplates }}"
        :productpages="{{ $productPages }}"
        :checkoutpages="{{ $checkoutPages }}"
        :relatedproductsections="{{ $relatedProductSections }}"
        :layouts="{{  $layouts }}"
        :loadingGifs="{{ $loadingGifs }}"
        :colorsfonts="{{ $colors }}"
        :fontFamilies="{{ $fontFamilies }}"
        :creditcards="{{ $creditCards }}"
        />
    </div>


@endsection

@section('js_after')

    <!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script></script>
@endsection
