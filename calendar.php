<?

class ExampleCalendar {
	
	const MONTH_DATA 		= [
		'Jan' => 'Январь',
		'Feb' => 'Февраль',
		'Mar' => 'Март',
		'Apr' => 'Апрель',
		'May' => 'Май',
		'Jun' => 'Июнь',
		'Jul' => 'Июль',
		'Aug' => 'Август',
		'Sep' => 'Сентябрь',
		'Oct' => 'Октябрь',
		'Nov' => 'Ноябрь',
		'Dec' => 'Декабрь'
		
	];
	const WEEK_DATA  		= [
		'Mon' => 'Понедельник',
		'Tue' => 'Вторник',
		'Wed' => 'Среда',
		'Thu' => 'Четверг',
		'Fri' => 'Пятница',
		'Sut' => 'Суббота',
		'Sun' => 'Воскресенье'
	];
	private static $_needly = '1990-01-01';	
	
	public static function setDate( $date = false )	{
		self::$_needly = $date 
			? strtotime($date) 
			: strtotime(self::$_needly);
	}
	
	public static function getOriginalDate()	{
		return date('d.m.Y', self::$_needly);
	}

	public static function getWeekDay()	{		
		return self::WEEK_DATA[strftime("%a", self::$_needly)];
	}
	
	public static function getMonth()	{				
		return self::MONTH_DATA[strftime("%b", self::$_needly)];
	}	
	
}

ExampleCalendar::setDate();
echo ExampleCalendar::getOriginalDate() . PHP_EOL;
echo ExampleCalendar::getWeekDay() .',' . PHP_EOL . ExampleCalendar::getMonth();