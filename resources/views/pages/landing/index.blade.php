<x-layouts.landing>
    <x-landing.header />
    <x-landing.hero />
    <x-landing.about :mission="$mission" :vision="$vision" />
    <x-landing.purpose :mission="$mission" :vision="$vision" />
    <x-landing.goals />
    <x-landing.team :facebook="$facebook" />
    <x-landing.faq :faqs="$faqs" />
    <x-landing.contact :address="$address" :email="$email" :mobile="$mobile" />
    <x-landing.bottom :address="$address" :email="$email" :mobile="$mobile" />


</x-layouts.landing>
