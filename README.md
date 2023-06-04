
Ninguno seleccionado

Ir al contenido
Uso de Gmail con lectores de pantalla
18 de 69
Take home task from Street Group
Recibidos

Mia Thomson, Street Group <conversations@message.teamtailor.com>
Adjuntos
2 jun 2023, 14:50 (hace 2 días)
para mí

   
Traducir mensaje
Desactivar para: inglés
Hi Jesus,

It was really nice speaking with you earlier about the PHP Developer position at Street Group. I caught up with the hiring manager after our call, and we both agree you have some great experience.

We’d love to progress you to the next step of the interview process, which is a short task to complete at home. You should have received two attachments; one with a set of data, and one with instructions around the task.

With this task, we are looking at your technical skills, but also your coding practices. If you could send your response back to me within 4 days, that would be great. If you need more time, just let me know.

Looking forward to seeing your response!

Thanks,
Talent Team

 

Recruiting powered by Teamtailor — Learn more

2
 archivos adjuntos
•  Analizado por Gmail

jesus lopez rodriguez
2 jun 2023, 18:04 (hace 2 días)
Hi , nice, I'll do this week end and send you then, thank you very much

jesus lopez rodriguez <jesuslopezprogramador@gmail.com>
2 jun 2023, 18:07 (hace 2 días)
para Street

Only a little question, should I do this task in laravel or pure PHP?

# Homeowner Names - Technical Test

> Please do not spend too long on this test, 2 hours should be more than sufficient. You may
choose to create a full application with a basic front-end to upload the CSV, or a simple class
that loads the CSV from the filesystem.

You have been provided with a CSV from an estate agent containing an export of their
homeowner data. If there are multiple homeowners, the estate agent has been entering both
people into one field, often in different formats.

Our system stores person data as individual person records with the following schema:

### Person

- title - required
- first_name - optional
- initial - optional
- last_name - required

Write a program that can accept the CSV and output an array of people, splitting the name into
the correct fields, and splitting multiple people from one string where appropriate.

For example, the string “Mr & Mrs Smith” would be split into 2 people.

## Example Outputs

Input
`“Mr John Smith”`

Output
```
$person[‘title’] => ‘Mr’,
$person[‘first_name’] => “John”,
$person[‘initial’] => null,
$person[‘last_name’] => “Smith”
```

Input
`“Mr and Mrs Smith”`

Output
```
$person[‘title’] => ‘Mr’,
$person[‘first_name’] => null,
$person[‘initial’] => null,
$person[‘last_name’] => “Smith”
$person[‘title’] => ‘Mrs’,
$person[‘first_name’] => null,
$person[‘initial’] => null,
$person[‘last_name’] => “Smith”
```

Input
`“Mr J. Smith”`

Output
```
$person[‘title’] => ‘Mr’,
$person[‘first_name’] => null,
$person[‘initial’] => “J”,
$person[‘last_name’] => “Smith”
```
readme__284_29.md
Mostrando readme__284_29.md.