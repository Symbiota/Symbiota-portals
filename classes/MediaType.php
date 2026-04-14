<?php
class MediaType {
	public const Image = 'image';
	public const Audio = 'audio';
	public const Video = 'video' ;
<<<<<<< HEAD

	public static function tryFrom(string $value) {
		if($value === self::Image || $value === self::Audio || $value === self::Video) {
			return $value;
=======
	public const Misc = 'misc' ;

	private const misc_types = [
		'text',
		'application'
	];

	public static function tryFrom(string $value): ?string {
		if($value === self::Image || $value === self::Audio || $value === self::Video) {
			return $value;
		} elseif(in_array($value, self::misc_types)) {
			return self::Misc;
>>>>>>> origin
		} else {
			return null;
		}
	}

	public static function values(): array {
		return [
			self::Image,
			self::Audio,
<<<<<<< HEAD
			self::Video
=======
			self::Video,
			self::Misc
>>>>>>> origin
		];
	}
}
