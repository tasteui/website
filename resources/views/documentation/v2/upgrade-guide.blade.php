<x-layout>
    <x-slot:title>
        Upgrade Guide
    </x-slot:title>
    <blockquote class="p-4 my-4 border-s-4 border-gray-500 bg-gray-200/50 dark:border-gray-400 dark:bg-gray-800">
        <p class="text-md italic font-medium leading-relaxed text-gray-900 dark:text-white">
            This page transcribes a conversation between the creator of the TallStackUI - AJ, and you, the reader.
        </p>
    </blockquote>
    <x-section class="space-y-4" title="Before Start" disable-copy>
        <p>
            Antes de começar a atualizar a sua aplicação para a versão 2.x da TallStackUI, eu, AJ, gostaria de te agradecer por utilizar a TallStackUI.
            Eu me sinto muito feliz por entender que ao resolver um problema meu, eu pude ajudar você também, porque a TallStackUI foi conceituada para resolver um problema
            meu em relação a não confiar em outras bibliotecas de componentes que são abandonadas ao passar do tempo.
        </p>
        <p>
            Além disso, gostaria de te pedir desculpas pelo atraso! Sim, eu considero que foi um pequeno atraso. Meu objetivo era lançar a versão 2.x na mesma data
            de lançamento da versão 1.x, em 28 de Novembro. Infelizmente não pude cumprir esse prazo por diversos problemas que tive em meu escritório.
        </p>
    </x-section>
    <x-section class="space-y-4" title="Whats News" disable-copy>
        <p>
            A versão 2.x da TallStackUI traz diversas coisas que eu considero que são melhorias. Você pode esperar componentes, componentes, e componentes, mas não
            é apenas de componentes que se mantém uma biblioteca como a TallStackUI. Assim, a versão 2.x traz novos componentes, melhorias dos componentes e diversas
            pequenas correções de bugs.
        </p>
        <p>
            Aqui está uma lista resumida do que você pode esperar da versão 2.x 👇
        </p>
        <div class="pl-4 space-y-2">
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">Internamente:</h2>
                <ul>
                    <li>- Estrutura interna redesenhada para melhor manutenção</li>
                    <li>- Documentações internas em trechos de lógicas importantes</li>
                    <li>- Novos conceitos internos para melhorar a estrutura de arquivos Blade</li>
                    <li class="font-bold">- Aumento de performance para renderização de diversos componentes em até 10%</li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">Novos Componentes ou Helpers:</h2>
                <ul>
                    <li>- Carousel</li>
                    <li>- Environment</li>
                    <li>- Layout</li>
                    <li>- Signature</li>
                    <li class="font-bold">- Novo Helper: EnvBar</li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">Outros:</h2>
                <ul>
                    <li>- Novo conceito de Soft Personalization Scoped</li>
                    <li>- Novo conceito para personalização de cores</li>
                    <li>- Novo conceito de itens customizados via BladeUI Toolkit</li>
                    <li>- Componente de <x-block>Card</x-block>: adição de cores, suporte a imagem e suporte a ser minimizável</li>
                    <li>- Componente de <x-block>Dropdown</x-block>: adição de suporte a sub-dropdown</li>
                    <li>- Componente de <x-block>Floating</x-block>: possibilidade de personalizar a classe do Floating pelo componente que o implementa</li>
                    <li>- Componente de <x-block>Form Color</x-block>: adição de opção clearable</li>
                    <li>- Componente de <x-block>Form Input</x-block>: adição de opção clearable</li>
                    <li>- Componente de <x-block>Form Select Styled</x-block>: adição de lazy loading</li>
                    <li>- Componente de <x-block>Form Select Styled</x-block>: adição de agrupação de resultados</li>
                    <li>- Componente de <x-block>Form Select Styled</x-block>: não requer mais o uso de <x-block>select</x-block></li>
                    <li>- Componente de <x-block>Form Password</x-block>: possibilidade de alterar o algoritmo de geração de senha</li>
                    <li>- Componente de <x-block>Form Number</x-block>: possibilidade de aumentar/diminuir por atributo <x-block>step</x-block></li>
                    <li>- Componente de <x-block>Form Upload</x-block>: possibilidade de validação ANTES do upload</li>
                    <li>- Componente de <x-block>Form Upload</x-block>: adição de possibilidade de controlar o fechamento do Floating após o upload</li>
                    <li>- Componente de <x-block>Rating</x-block>: possibilidade de usar qualquer ícone</li>
                    <li>- Componente de <x-block>Slide</x-block>: possibilidade de abertura via novas posições: top e bottom</li>
                    <li>- Componente de <x-block>Stats</x-block>: adição de suporte a wire:click</li>
                    <li>- Helper <x-block>darkTheme</x-block>: atributos como objeto</li>
                    <li>- Helper <x-block>darkTheme</x-block>: possibilidade de forçar o dark theme inicialmente apenas</li>
                    <li>- Helper <x-block>Debug Mode</x-block>: necessidade de ignorar componentes pelo nome da classe ao invés de string</li>
                    <li>- Novo namespace para Toast, Dialog e Banner: <x-block>TallStackUi\Foundation\Interactions</x-block></li>
                </ul>
            </div>
        </div>
        <x-warning>
            Com excessão da seção "Internamente", todos os detalhes estão descritos nas respectivas páginas dos componentes.
        </x-warning>
    </x-section>
    <x-section class="space-y-4" title="How to Upgrade" disable-copy>
        <p>
            Agora que eu listei tudo o que fiz nessa nova versão até agora. Vamos falar sobre como atualizar a sua aplicação para a nova versão.
            Em primeiro lugar, é importante mencionar que o <b>quão trabalhoso será dependerá de como está a sua aplicação.</b> Eu atualizei dois projetos meus apenas
            trocando a referência de versão no <x-block>composer.json</x-block>
        </p>
        <div class="pl-4 space-y-2">
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">1. Verifique as Chaves da Soft Personalization:</h2>
                <p>
                    Antes de iniciar o processo de atualização verifique se o nome das chaves de Soft Personalization continuam as mesmas. Posso ter renomeado alguma
                    delas para uma melhor organização interna. <b>Se você não fez Soft Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">2. Refaça a Deep Personalization:</h2>
                <p>
                    Embora eu saiba que isso é trabalhoso, se você publicou os arquivos Blade da TallStackUI ou extendeu as classes de componentes para alterar comportamentos específicos
                    - como personalização de cores, <b>recomendamos que realize um backup dos seus arquivos</b>, republique os novos e ajuste os novos arquivos com os seus ajustes -
                    salvos em backup. Isso é necessário porque como estamos falando de uma nova versão diversas mudanças internas foram feitas, então seus arquivos atuais estarão
                    desatualizados. <b>Se você não fez Deep Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">3. Salve Qualquer Soft Personalization Scoped:</h2>
                <p>
                    O conceito de Soft Personalization Scoped mudou na versão 2.x, e a mudança foi para melhor! Então salve todas as suas personalizações para aplicá-las
                    usando o novo conceito, <b>que é via service provider</b>. Iremos te explicar sobre isso na página da Soft Personalization. <b>Se você não fez Soft Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">4. Componentes e Atributos Iguais:</h2>
                <p>
                    Já os componentes e seus atributos, são os mesmos. Neste aspectos, espero que você não tenha nenhum problema. É por isso que se você utiliza a TallStackUI
                    "de forma básica", então o processo de upgrade se torna extremamente fácil, como em meus projetos pessoais.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium cursor-pointer">5. Atualize o Composer:</h2>
                <p>
                    Edite o seu arquivo <x-block>composer.json</x-block> e atualize a versão da TallStackUI para <x-block>^2.0</x-block>. Após isso, execute o comando:
                    <x-block>rm -fr vendor/ && composer install</x-block>. Isso irá apagar a sua pasta vendor - por garantia de uma atualização correta - e instalará a nova versão.
                </p>
            </div>
        </div>
    </x-section>
</x-layout>
