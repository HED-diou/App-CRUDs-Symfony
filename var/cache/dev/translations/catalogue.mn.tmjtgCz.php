<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Энэ утга буруу байх ёстой.',
    'This value should be true.' => 'Энэ утга үнэн байх ёстой.',
    'This value should be of type {{ type }}.' => 'Энэ утга  {{ type }} -н төрөл байх ёстой.',
    'This value should be blank.' => 'Энэ утга хоосон байх ёстой.',
    'The value you selected is not a valid choice.' => 'Сонгосон утга буруу байна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Хамгийн багадаа {{ limit }} утга сонгогдсон байх ёстой.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Хамгийн ихдээ {{ limit }} утга сонгогдох боломжтой.',
    'One or more of the given values is invalid.' => 'Өгөгдсөн нэг эсвэл нэгээс олон утга буруу байна.',
    'This field was not expected.' => 'Энэ талбар нь хүлээгдэж байсан юм.',
    'This field is missing.' => 'Энэ талбар нь алга болсон байна.',
    'This value is not a valid date.' => 'Энэ утга буруу date төрөл байна .',
    'This value is not a valid datetime.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid email address.' => 'И-майл хаяг буруу байна.',
    'The file could not be found.' => 'Файл олдсонгүй.',
    'The file is not readable.' => 'Файл уншигдахуйц биш байна.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна ({{ size }} {{ suffix }}). Зөвшөөрөгдөх дээд хэмжээ  {{ limit }} {{ suffix }} байна.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Файлын MIME-төрөл нь буруу байна ({{ type }}). Зөвшөөрөгдөх MIME-төрлүүд {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Энэ утга  {{ limit }} юмуу эсвэл бага байна.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Энэ утга хэтэрхий урт байна. {{ limit }} тэмдэгтийн урттай юмуу эсвэл бага байна.',
    'This value should be {{ limit }} or more.' => 'Энэ утга {{ limit }} юмуу эсвэл их байна.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Энэ утга хэтэрхий богино байна. {{ limit }} тэмдэгт эсвэл их байна.',
    'This value should not be blank.' => 'Энэ утга хоосон байж болохгүй.',
    'This value should not be null.' => 'Энэ утга null байж болохгүй.',
    'This value should be null.' => 'Энэ утга null байна.',
    'This value is not valid.' => 'Энэ утга буруу байна.',
    'This value is not a valid time.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid URL.' => 'Энэ утга буруу URL байна .',
    'The two values should be equal.' => 'Хоёр утгууд ижил байх ёстой.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна. Зөвшөөрөгдөх дээд хэмжээ нь {{ limit }} {{ suffix }} байна.',
    'The file is too large.' => 'Файл хэтэрхий том байна.',
    'The file could not be uploaded.' => 'Файл upload хийгдсэнгүй.',
    'This value should be a valid number.' => 'Энэ утга зөвхөн тоо байна.',
    'This file is not a valid image.' => 'Файл зураг биш байна.',
    'This is not a valid IP address.' => 'IP хаяг зөв биш байна.',
    'This value is not a valid language.' => 'Энэ утга үнэн зөв хэл биш байна.',
    'This value is not a valid locale.' => 'Энэ утга үнэн зөв байршил биш байна.',
    'This value is not a valid country.' => 'Энэ утга үнэн бодит улс биш байна.',
    'This value is already used.' => 'Энэ утга аль хэдийнээ хэрэглэгдсэн байна.',
    'The size of the image could not be detected.' => 'Зургийн хэмжээ тогтоогдож чадсангүй.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Зургийн өргөн хэтэрхий том байна ({{ width }}px). Өргөн нь хамгийн ихдээ {{ max_width }}px байх боломжтой.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Зургийн өргөн хэтэрхий жижиг байна ({{ width }}px). Өргөн нь хамгийн багадаа {{ min_width }}px байх боломжтой.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Зургийн өндөр хэтэрхий том байна ({{ height }}px). Өндөр нь хамгийн ихдээ {{ max_height }}px байх боломжтой.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Зургийн өндөр хэтэрхий жижиг байна ({{ height }}px). Өндөр нь хамгийн багадаа {{ min_height }}px байх боломжтой.',
    'This value should be the user\'s current password.' => 'Энэ утга хэрэглэгчийн одоогийн нууц үг байх ёстой.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Энэ утга яг {{ limit }} тэмдэгт байх ёстой.|Энэ утга яг {{ limit }} тэмдэгт байх ёстой.',
    'The file was only partially uploaded.' => 'Файлын зөвхөн хагас нь upload хийгдсэн.',
    'No file was uploaded.' => 'Ямар ч файл upload хийгдсэнгүй.',
    'No temporary folder was configured in php.ini.' => 'php.ini дээр түр зуурын хавтсыг тохируулаагүй байна, эсвэл тохируулсан хавтас байхгүй байна.',
    'Cannot write temporary file to disk.' => 'Түр зуурын файлыг диск руу бичиж болохгүй байна.',
    'A PHP extension caused the upload to fail.' => 'PHP extension нь upload -г амжилтгүй болгоод байна.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Энэ коллекц яг {{ limit }} элемент агуулах ёстой.|Энэ коллекц яг {{ limit }} элемент агуулах ёстой.',
    'Invalid card number.' => 'Картын дугаар буруу байна.',
    'Unsupported card type or invalid card number.' => 'Дэмжигдээгүй картын төрөл эсвэл картын дугаар буруу байна.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Энэ утга үнэн зөв Олон Улсын Банкны Дансны Дугаар (IBAN) биш байна.',
    'This value is not a valid ISBN-10.' => 'Энэ утга үнэн зөв ISBN-10 биш байна.',
    'This value is not a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-13 биш байна.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-10 юмуу ISBN-13 биш байна.',
    'This value is not a valid ISSN.' => 'Энэ утга үнэн зөв ISSN биш байна.',
    'This value is not a valid currency.' => 'Энэ утга үнэн бодит валют биш байна.',
    'This value should be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тaй тэнцүү байх ёстой.',
    'This value should be greater than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с их байх ёстой.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү юмуу эсвэл их байх ёстой.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёстой.',
    'This value should be less than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с бага байх ёстой.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай ижил юмуу эсвэл бага байх ёстой.',
    'This value should not be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү байх ёсгүй.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёсгүй.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Зургийн харьцаа хэтэрхий том байна ({{ ratio }}). Харьцаа нь хамгийн ихдээ {{ max_ratio }} байна.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Зургийн харьцаа хэтэрхий жижиг байна ({{ ratio }}). Харьцаа нь хамгийн багадаа {{ min_ratio }} байна.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зураг дөрвөлжин хэлбэртэй байна ({{ width }}x{{ height }}px). Дөрвөлжин зургууд оруулах боломжгүй.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зураг хэвтээ байрлалтай байна ({{ width }}x{{ height }}px). Хэвтээ байрлалтай зургууд оруулах боломжгүй.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зургууд босоо байрлалтай байна ({{ width }}x{{ height }}px). Босоо байрлалтай зургууд оруулах боломжгүй.',
    'An empty file is not allowed.' => 'Хоосон файл оруулах боломжгүй.',
    'The host could not be resolved.' => 'Хост зөв тохирогдоогүй байна.',
    'This value does not match the expected {{ charset }} charset.' => 'Энэ утга тооцоолсон {{ charset }} тэмдэгттэй таарахгүй байна.',
    'This is not a valid Business Identifier Code (BIC).' => 'Энэ утга үнэн зөв Business Identifier Code (BIC) биш байна.',
    'Error' => 'Алдаа',
    'This is not a valid UUID.' => 'Энэ утга үнэн зөв UUID биш байна.',
    'This value should be a multiple of {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -н үржвэр байх ёстой.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Энэ Business Identifier Code (BIC) код нь IBAN {{ iban }} -тай холбоогүй байна.',
    'This value should be valid JSON.' => 'Энэ утга JSON байх ёстой.',
    'This collection should contain only unique elements.' => 'Энэ коллекц зөвхөн давтагдахгүй элементүүд агуулах ёстой.',
    'This value should be positive.' => 'Энэ утга эерэг байх ёстой.',
    'This value should be either positive or zero.' => 'Энэ утга тэг эсвэл эерэг байх ёстой.',
    'This value should be negative.' => 'Энэ утга сөрөг байх ёстой.',
    'This value should be either negative or zero.' => 'Энэ утга сөрөг эсвэл тэг байх ёстой.',
    'This value is not a valid timezone.' => 'Энэ утга үнэн зөв цагийн бүс биш байна.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Энэ нууц үгийн мэдээлэл алдагдсан байх магадлалтай учраас дахин ашиглагдах ёсгүй. Өөр нууц үг ашиглана уу.',
    'This value should be between {{ min }} and {{ max }}.' => 'Энэ утга {{ min }} -с {{ max }} хооронд байх ёстой.',
    'This value is not a valid hostname.' => 'Энэ утга буруу hostname байна.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Энэхүү цуглуулган дахь элемэнтийн тоо, {{ compared_value }}-н үржвэр байх ёстой.',
    'This value should satisfy at least one of the following constraints:' => 'Энэ утга доорх болзолуудын ядаж нэгийг хангах ёстой:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Энэхүү цуглуулган дахь элемэнтүүд өөр өөрсдийн болзолуудаа хангах ёстой.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Энэ утга зөв International Securities Identification Number (ISIN) биш байна.',
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
    'This value is not a valid HTML5 color.' => 'Энэ утга зөв HTML5 өнгө биш байна.',
    'Please enter a valid birthdate.' => 'Зөв төрсөн он сар оруулна уу.',
    'The selected choice is invalid.' => 'Сонгосон утга буруу байна.',
    'The collection is invalid.' => 'Цуглуулга буруу байна.',
    'Please select a valid color.' => 'Үнэн зөв өнгө сонгоно уу.',
    'Please select a valid country.' => 'Үнэн зөв улс сонгоно уу.',
    'Please select a valid currency.' => 'Үнэн зөв мөнгөн тэмдэгт сонгоно уу.',
    'Please choose a valid date interval.' => 'Үнэн зөв цагын зай сонгоно уу.',
    'Please enter a valid date and time.' => 'Үнэн зөв он цаг оруулна уу.',
    'Please enter a valid date.' => 'Үнэн зөв он цаг өдөр оруулна уу.',
    'Please select a valid file.' => 'Үнэн зөв файл сонгоно уу.',
    'The hidden field is invalid.' => 'Нууц талбарын утга буруу байна.',
    'Please enter an integer.' => 'Бүхэл тоо оруулна уу.',
    'Please select a valid language.' => 'Үнэн зөв хэл сонгоно уу.',
    'Please select a valid locale.' => 'Үнэн зөв бүс сонгоно уу.',
    'Please enter a valid money amount.' => 'Үнэн зөв мөнгөний хэмжээ сонгоно уу.',
    'Please enter a number.' => 'Тоо оруулна уу.',
    'The password is invalid.' => 'Нууц үг буруу байна.',
    'Please enter a percentage value.' => 'Хувь утга оруулна уу.',
    'The values do not match.' => 'Утга хоорондоо таарахгүй байна.',
    'Please enter a valid time.' => 'Үнэн зөв цаг оруулна уу.',
    'Please select a valid timezone.' => 'Үнэн зөв цагын бүс оруулна уу.',
    'Please enter a valid URL.' => 'Үнэн зөв URL оруулна уу.',
    'Please enter a valid search term.' => 'Үнэн зөв хайх утга оруулна уу.',
    'Please provide a valid phone number.' => 'Үнэн зөв утасны дугаар оруулна уу.',
    'The checkbox has an invalid value.' => 'Сонгох хайрцаг буруу утгатай байна.',
    'Please enter a valid email address.' => 'Үнэн зөв и-мэйл хаяг оруулна уу.',
    'Please select a valid option.' => 'Үнэн зөв сонголт сонгоно уу.',
    'Please select a valid range.' => 'Үнэн зөв хязгаарын утга сонгоно уу.',
    'Please enter a valid week.' => 'Үнэн зөв долоо хоног сонгоно уу.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Нэвтрэх хүсэлтийн алдаа гарав.',
    'Authentication credentials could not be found.' => 'Нэвтрэх эрхийн мэдээлэл олдсонгүй.',
    'Authentication request could not be processed due to a system problem.' => 'Системийн алдаанаас болон нэвтрэх хүсэлтийг гүйцэтгэх боломжгүй байна.',
    'Invalid credentials.' => 'Буруу нэвтрэх эрхийн мэдээлэл.',
    'Cookie has already been used by someone else.' => 'Күүки файлыг аль хэдийн өөр хүн хэрэглэж байна.',
    'Not privileged to request the resource.' => 'Энэхүү мэдээллийг авах эрх хүрэхгүй байна.',
    'Invalid CSRF token.' => 'Тохиромжгүй CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Нэвтрэх токенг дэмжих нэвтрэх эрхийн хангагч олдсонгүй.',
    'No  available, it either timed out or cookies are not enabled.' => 'Хэрэглэгчийн session олдсонгүй, хугацаа нь дууссан эсвэл күүки идэвхижүүлээгүй байна.',
    'No token could be found.' => 'Токен олдсонгүй.',
    'Username could not be found.' => 'Нэвтрэх нэр олсонгүй.',
    'Account has expired.' => 'Бүртгэлийн хугацаа дууссан байна.',
    'Credentials have expired.' => 'Нэвтрэх эрхийн хугацаа дууссан байна.',
    'Account is disabled.' => 'Бүртгэлийг хаасан байна.',
    'Account is locked.' => 'Бүртгэлийг цоожилсон байна.',
    'Too many failed login attempts, please try again later.' => 'Хэтэрхий олон амжилтгүй оролдлого, түр хүлээгээд дахин оролдоно уу.',
    'Invalid or expired login link.' => 'Буруу эсвэл хугацаа нь дууссан нэвтрэх зам.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Edit %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'Do you really want to alter the selected items?',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
