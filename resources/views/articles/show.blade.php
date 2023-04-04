@extends('articles.layouts.app')

@section('content')
    <div class="py-40 space-y-2 xl:space-y-0 w-4/5 sm:w-2/5 mx-auto">
        <h2 class="text-gray-100 pb-4 text-3xl sm:text-5xl font-bold">
            {{ $article->title }}
        </h2>

        <span class="py-8 text-white text-sm">
            {{ $article->user->name }} · {{ $article->created_at->format("M jS Y") }} ·
            <a href="" class="border-b-2 pb-1 border-red-500 hover:text-red-500 transition-all">
                {{ $article->category->name }}
            </a>
        </span>

        <div>
            <p class="font-bold text-white text-md pt-10">
                {{ $article->excerpt }}
            </p>

            <p class="font-normal text-white text-md pt-4 whitespace-pre-line text-left">
                {{ $article->description }}
            </p>

            <ul class="pt-10">
                @foreach($article->tags as $tag)
                    <li class="inline">
                        <a href=""
                           class="inline bg-red-700 rounded-md py-1 px-2 font-semibold text-sm text-white hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">
                            #{{ $tag->name  }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="pt-10">
            <div class="border-t-2 border-red-900">
                <h3 class="text-white font-bold pt-10">
                    {{ $article->category->name }}
                </h3>
                <p class="text-white font-normal pt-2 text-sm">
                    {{ $article->category->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
