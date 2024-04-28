<div class="icon_hoa">
    <div class="wrapper">
        <h2>MẪU HOA BÁN CHẠY 2024</h2>
        <ul>
            @isset($bestSellingProducts)
                @foreach($bestSellingProducts as $bestSellingProduct)
                    <li>
                        <a href="#"><img src="{{ asset('anhhoa/' . $bestSellingProduct->AnhDaiDien) }}" alt=""></a>
                    </li>
                @endforeach
            @endisset
        </ul>
    </div>
</div>
