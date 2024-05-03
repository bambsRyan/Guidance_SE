<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased">
        <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex h-full">
                <div class="flex flex-col items-center w-full h-full p-2">
                    <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl">
                        <span class="text-2xl">
                            CONFIDENTIALITY AGREEMENT & CONSENT FORM
                        </span>
                    </div>
                    <div class="flex w-4/5 m-4 justify-center">
                        <div class="flex w-full justify-center text-justify flex-col gap-4">
                            <span>
                                I understand that as a student / employee of PAMANTASAN NG LUNGSOD NG MAYNILA, the Office of Guidance and Testing Services (OGTS) provides services which include (1) counseling and follow-up, (2) 
                                enrichment activity. (3) testing / appraisal, (4) consultation, (5) placement, (6) research and evaluation, and (7) referral. I can benefit from the assistance that the OGTS can provide for my academic, personal-social, and career development. 
                            </span>
                            <span>
                            I understand that by accomplishing this form, all personal data that I will give will be used for the above-mentioned guidance services. All information shared will be treated with strict confidentiality to protect my interest
                             as a client and no information will be released without my consent nor will it appear on my academic / employee record. The OGTS shall ensure the proper safekeeping of my personal data. In certain situations, I understand that my counselor may discuss my concerns with another counselor without revealing any personal identification at the guidance office for consultation where my written and/or digital authorization is not required.
                            </span>
                            <span>
                            I understand that I have the right to access and be informed of the resuits of my psychological evaluation and counseling sessions. I have the right to discuss the results with my counselor or anyone I choose to. 
                            </span>
                            <span>
                            I further understand that my counselor may also confer with a physician, a faculty / staff or a member of my family provided it will be explained to me the advantages/reason for the said disclosure. A signed Consent to Release information must be secured before my counselor can communicate any information about counseling or the results of my psychological assessment to another person or agency in a written and/or digital format. 
                            </span>
                            <span>
                            However, there are exemptions to confidentiality where my counselor is required by law to release information with or without my permission. These exemptions are: (1) cases of life-threatening situations, (2) cases of suspected child or elder abuse, (3) and when there is a valid court order.
                            </span>
                            <span>
                            I understand that I can ask and discuss with my counselor any clarificatory question that I may have about this document or about the services offered at the OGTS which will serve me up to one year after separation from PLM. 
                            </span>
                            <span>
                            By checking 'I Confirm" below, I understand that it will indicate that I have read and understood the above statements regarding the purpose disclosure, processing, and access of this record, services, confidentiality, and informed consent. I agree to participate and undergo the programs and services of the OGTS.
                            </span>
                            <div class="flex justify-center">
                            <form action="/info" class="flex justify-center flex-col gap-2">
                                <div class="items-center flex">
                                <input type="checkbox" class="checkbox" required />
                                <label for="confirm" class="text-xl text-center">I Confirm</label><br>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-outline" >
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html> 
