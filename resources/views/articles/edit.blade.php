<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (!empty($errors))
        <div class="error">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="post">
        @csrf
        @method('PATCH')
        <select name="private" id="private">
            <option value="true" selected>非公開</option>
            <option value="false" disabled>公開</option>
        </select>
        <div>
            <input type="text" name="title" id="title" placeholder="タイトル" value="{{ $article->title }}">
        </div>
        <div>
            <input type="text" name="tags" id="tags" placeholder="知識に関する関するタグをスペース区切りで5つまで入力 (例:Ruby Rails)" required value="{{ $article->tags }}">
        </div>
        <div>
            <textarea name="body" cols="30" rows="10" id="body" placeholder="エンジニアに関わる知識をMarkdown記法で書いて共有しよう" required>{{ $article->body }}</textarea>
        </div>
        <input type="submit" name="" id="" value="更新する">
    </form>
    <button type="button" onclick="location.href='{{ route('articles.index') }}">一覧に戻る</button>
</body>

</html>
