$color: $wp-selected-color;
$bkg-color: #fff;
$size: 20;

.fs-ajax-loader
{
    position: relative;
    width:    #{8*$size + 10}px;
    height:   #{$size}px;
    margin:   auto;

    .fs-ajax-loader-bar
    {
        position:         absolute;
        top:              0;
        background-color: $color;
        width:            #{$size}px;
        height:           #{$size}px;
        @include animation-name(bounce_ajaxLoader);
        @include animation-duration(1.5);
        @include animation-iteration-count(infinite);
        @include animation-direction(normal);
        @include transform(0.3);
    }

    @for $i from 0 through 7
    {
        .fs-ajax-loader-bar-#{$i + 1}
        {
            left: #{$i*($size - 1)}px;
            @include animation-delay(#{0.6 + $i*0.15}s);
        }
    }
}

@include keyframes(bounce_ajaxLoader)
{
    0%
    {
        @include transform(scale(1));
        background-color: $color;
    }

    100%
    {
        @include transform(scale(.3));
        background-color: $bkg-color;
    }
}