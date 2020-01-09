@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3">
      <img class="rounded-circle p-5" alt="Foto do perfil de freecodecamp" src="https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_ohc=0oOrK8uddAcAX9qYOkL&amp;oh=7f0685c05a317948bd029c8e797b0b8e&amp;oe=5EAA2DD7"/>
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="/p/create">Add New Post</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>153</strong> posts</div>
        <div class="pr-5"><strong>23k</strong> followers</div>
        <div class="pr-5"><strong>212</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#">{{ $user->profile->url ?? "N/A" }}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
      <img alt="A imagem pode conter: tela, comida e área interna" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.86.895.895a/s150x150/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=ffbc839311028f6f42d421520c36e9e5&amp;oe=5EA5380D 150w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.86.895.895a/s240x240/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=eb38a38b815c4412d4af15b0a29bd720&amp;oe=5EAD6647 240w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.86.895.895a/s320x320/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=de112a9a604e9d1449abdff25dc5f145&amp;oe=5EAFADFD 320w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.86.895.895a/s480x480/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=c39c529c612d43c7fa585bd5be0a9a38&amp;oe=5EB25EA7 480w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.86.895.895a/s640x640/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=7ef00408dfdf52bc0f0beb8a62adcac8&amp;oe=5E9F5207 640w" src="https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.86.895.895a/s640x640/79911354_534788087122874_7482174141267842171_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=iYkMcjcxoMMAX_FyzDG&amp;oh=7ef00408dfdf52bc0f0beb8a62adcac8&amp;oe=5E9F5207" style="object-fit: cover;" />
    </div>
    <div class="col-4">
      <img alt="A imagem pode conter: uma ou mais pessoas" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/s150x150/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=225dd674a26fd794a893d4baf3bf0752&amp;oe=5EA5A828 150w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/s240x240/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=b26f7ce67640384bb257a8e004330397&amp;oe=5E8DB02E 240w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/s320x320/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=5e59c8f2ddd361775fdc221bd2efefe4&amp;oe=5E8FC950 320w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/s480x480/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=b28a39c9751be3fc08ff6ae38868ba3b&amp;oe=5E97D017 480w,https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=3a90d68e0927a5d35502931844f7468c&amp;oe=5EA9D160 640w" src="https://instagram.fvix2-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fvix2-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=-0dgct8lD3UAX9jXJgx&amp;oh=3a90d68e0927a5d35502931844f7468c&amp;oe=5EA9D160" style="object-fit: cover;" />
    </div>
    <div class="col-4">
      <img alt="A imagem pode conter: uma ou mais pessoas e pessoas sentadas" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.0.749.749a/s150x150/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=5940e78cf65d8850288927e4ea3a4ed3&amp;oe=5E9F7F9E 150w,https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.0.749.749a/s240x240/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=9afdcea6d9a5bd6a126d90000b4a105c&amp;oe=5EAB22D4 240w,https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.0.749.749a/s320x320/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=4aadf199c76138b8708be6ee8854c2d7&amp;oe=5E8D4C6E 320w,https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.0.749.749a/s480x480/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=e83d1c9b1e776666424994934ce748e3&amp;oe=5E9C0434 480w,https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.749.749a/s640x640/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=56ea1a80be5c9bacf46018d6fef42220&amp;oe=5EAF09D7 640w" src="https://instagram.fvix2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.749.749a/s640x640/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fvix2-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=O4YX5_WgDoUAX-ScQDb&amp;oh=56ea1a80be5c9bacf46018d6fef42220&amp;oe=5EAF09D7" style="object-fit: cover;" />
    </div>
  </div>
</div>
@endsection
