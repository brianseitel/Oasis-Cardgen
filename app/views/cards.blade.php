@extends('layout')

@section('content')
	<h1>Characters</h1>
	<div class="cards">
	@foreach($characters as $card)
		<div class="card">
			<div class="name">{{ $card->name }}</div>
			<div class="description">{{ nl2br($card->description) }}</div>
			<div class="type">{{ ucwords($card->type) }} Card</div>
		</div>
	@endforeach
	</div>

	<h1>Actions</h1>
	<div class="cards">
	@foreach($actions as $card)
		<div class="card">
			<div class="name">{{ $card->name }}</div>
			<div class="description"><span style="font-variant: small-caps;font-style: normal;border-bottom:1px solid #CCC">Action</span><br/>{{ nl2br($card->description) }}</div>
			<div class="type">{{ ucwords($card->type) }} Card</div>
		</div>
	@endforeach
	</div>

	<h1>Proofs</h1>
	<div class="cards">
	@foreach($proofs as $card)
		<? $owner = Card::find($card->owner_id) ?>
		<div class="card">
			<div class="name">{{ $card->name }}</div>
			<div class="description">{{ nl2br($card->description) }}</div>
			<div class="proof_type">{{ $owner->name }}<br/>({{ str_replace('proof_', '', $card->type) }})</div>
			<div class="type">Proof Card</div>
		</div>
	@endforeach
	</div>
@stop