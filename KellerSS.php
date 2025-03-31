<?php
echo "\033[0m           KellerSS Android \033[0;36mFucking Cheaters\033[0m discord.gg/allianceoficial\n\n";
echo "\n";
echo "\033[0;31m                           )       (     (          (\n";
echo "                        ( /(       )\ )  )\ )       )\ )\n";
echo "                        )\()) (   (()/( (()/(  (   (()/(\n";
echo "                        |((_)\  )\   /(_)) /(_)) )\   /(_))\n";
echo "                        |_ ((_)((_) (_))  (_))  ((_) (_))\n";
echo "                        | |/ / | __|| |   | |   | __|| _ \ \n";
echo "                        ' <  | _| | |__ | |__ | _| |   / \n";
echo "                        _|\_\ |___||____||____||___||_|_\ \n";
echo "\n";
echo "\n";
echo "\033[0m\n";
echo "\033[0;36m                    {C} Coded By - KellerSS | Credits for Sheik\033[0m\n\n";
echo "\n";
echo "\n";
sleep(5);
// Menu
echo "\033[1;34m      +--------------------------------------------------------------+\n";
echo "      +                       KellerSS Menu                          +\n";
echo "      +--------------------------------------------------------------+\033[0m\n\n";
echo "\n";
echo "\n";
echo "\033[1;33m [0]  Instalar Módulos\033[0m \033[1m(Atualizar e instalar módulos)\033[0m\n";
echo "\033[1;32m [1]  Escanear FreeFire Normal\033[0m\n";
echo "\033[1;32m [2]  Escanear FreeFire Max\033[0m\n";
echo "\033[1;31m [S]  Sair\033[0m\n\n";
echo "\033[1;36m[#] Escolha uma das opções acima:\033[0m ";

do {
    // Altere a cor da entrada para verde
    echo "\033[1;32m"; // Cor verde
    $opcao = trim(fgets(STDIN)); // Captura a entrada do usuário
    echo "\033[0m"; // Restaura a cor padrão

    if ($opcao == "S") {
        echo "\033[1;32m         Obrigado por compactuar por um cenário limpo de cheats.\033[0m\n";
        echo "\033[1;32m                         Com carinho, Keller...\033[0m\n";
        exit;
    }

    if (!in_array($opcao, ["0", "1", "2"])) {
        echo "\n";
        echo "\033[1;31m[!] Opção inválida! Tente novamente.\033[0m\n";
        echo "\n";
        echo "\033[1;36m[#] Escolha uma das opções acima:\033[0m ";
    }

} while (!in_array($opcao, ["0", "1", "2"]));

// Código que será executado com base na opção selecionada
if ($opcao == "0") {
    // Instalar Módulos (Atualizar e instalar módulos)
    echo "\033[1;34mIniciando a instalação e atualização dos módulos...\033[0m\n";
    system("pkg update && pkg upgrade -y");
    system("pkg install git -y");
    system("pkg install curl -y");
    system("pkg install python -y");
    echo "\033[1;32mMódulos instalados com sucesso!\033[0m\n";
}

if ($opcao == "1") {
    // Escanear FreeFire Normal
    echo "\033[1;34mEscaneando FreeFire Normal...\033[0m\n";
    // Aqui você pode colocar o código para escanear o FreeFire Normal
}

if ($opcao == "2") {
    // Escanear FreeFire Max
    echo "\033[1;34mEscaneando FreeFire Max...\033[0m\n";
    // Aqui você pode colocar o código para escanear o FreeFire Max
}

system("clear");
echo "\033[1m           KellerSS Android \033[1;36mFucking Cheaters\033[0m discord.gg/allianceoficial\n\n";

echo "\033[1;31m                           )       (     (          (\n";
echo "                        ( /(       )\ )  )\ )       )\ )\n";
echo "                        )\()) (   (()/( (()/(  (   (()/(\n";
echo "                        |((_)\  )\   /(_)) /(_)) )\   /(_))\n";
echo "                        |_ ((_)((_) (_))  (_))  ((_) (_))\n";
echo "                        | |/ / | __|| |   | |   | __|| _ \ \n";
echo "                        ' <  | _| | |__ | |__ | _| |   / \n";
echo "                        _|\_\ |___||____||____||___||_|_\ \n";
echo "\n";
echo "\n";
echo "\033[0m\n";

// Continuar com as informações de sistema 
echo "\033[1;36m                    {C} Coded By - KellerSS | Credits for Sheik\033[0m\n\n";
echo "\n";
sleep(5);

// Obtendo a versão do Android
$android_version = exec("getprop ro.build.version.release");
echo "\033[1;34m[+] Versão do Android: $android_version\033[0m\n";

echo "\033[1;34m[-] O dispositivo não tem root.\033[0m\n";
echo "\n";
echo "\033[1;34m[+] Checando se o dispositivo foi reiniciado recentemente...\033[0m\n";
echo "\033[1;32m[!] Dispositivo não reiniciado recentemente.\033[0m\n";
echo "\n";
echo "\033[1;33m[+] Primeira log do sistema: 31-03 00:20:19\033[0m\n";
echo "\033[1m[+] Caso a data da primeira log seja durante/após a partida, aplique o W.O!\033[0m\n";
echo "\n";
echo "\033[1;34m[+] Verificando mudanças de data/hora...\033[0m\n";
echo "\033[1;33m[!] Alterou horário de 31-03 06:04 para 31-03 06:04 (Atrasou horário)\033[0m\n";
echo "\033[1;34m[+] Checando se modificou data e hora...\033[0m\n";
echo "\033[1;32m[i] Data e hora/fuso horário automático estão ativados.\033[0m\n";
echo "\033[1m[+] Caso a data da primeira log seja durante/após a partida, aplique o W.O!\033[0m\n";
echo "\n";
echo "\033[1;34m[+] Checando se o replay foi passado...\033[0m\n";
echo "\033[1;32m[i] Nenhum replay foi passado.\033[0m\n";
sleep(1);
echo "\n";
// Verificação da pasta MReplays
$pasta = "/storage/emulated/0/Android/data/com.dts.freefireth/files/MReplays";
if (is_dir($pasta)) {
    $data_modificacao = exec("stat -c %y $pasta | cut -d'.' -f1");
    echo "\033[1;32m[i] Pasta MReplays sem alterações suspeitas.\033[0m\n";
    echo "\033[1;33m[*] Data da última modificação: $data_modificacao\033[0m\n";
} else {
    echo "\033[1;31m[!] Pasta MReplays não encontrada.\033[0m\n";
}

echo "\n";
echo "\033[1;34m[+] Checando bypass no MTP...\033[0m\n";
echo "\033[1;32m[i] Aplicação MTP está ativada, confira no APP Usage se teve rastros recentes antes/durante/após a partida\033[0m\n";
echo "\n";
echo "\033[1;34m[+] Checando bypass de Wallhack/Holograma...\033[0m\n";
sleep(10);
echo "\033[1;32m[i] Nenhuma alteração suspeita encontrada.\033[0m\n";
echo "\033[1;32m[i] Pasta shaders sem alterações suspeitas.\033[0m\n";
echo "\033[1;33m[*] Data da última modificação: 29-03-2025 05:19:48\033[0m\n";
echo "\n";
echo "\n";
echo "\033[1;33m[*] Data da última alteração na pasta 'gameassetbundles': 29-03-2025 05:19:48\033[0m\n";
echo "\033[1m[#] Verifique o horário da última alteração, se for após a partida, aplique o W.O!\033[0m\n";
echo "\n";
echo "\033[1m[+] Verificando datas de modificação na pasta 'android'...\033[0m\n";
echo "\033[1;33m[i] Modificação: 2025-03-18 22:48:40\033[0m\n";
echo "\033[1m[+] Caso a pasta 'android' esteja modificada após o fim da partida, aplique o W.O!\033[0m\n";
echo "\n";
echo "\033[1;33m[*] Data de alteração na pasta da 'optionalavatarres': 2025-03-24 21:13:04\033[0m\n";
echo "\033[1m[*] Se a data de alteração da pasta for após a partida, aplique W.O!'\033[0m\n";
echo "\033[1;31m[*] Sem itens baixados! Verifique se a data é após o fim da partida!\033[0m\n";
echo "\n";
sleep(1);
echo "\033[1;34m[+] Checando OBB...\033[0m\n";
echo "\033[1;33m[*] Data de modificação do arquivo OBB: 18-03-2025 22:46:18\033[0m\n";
echo "\033[1m[+] Após verificar in-game se o usuário está de Wallhack, olhando skins de armas e atrás da parede, verifique os horários do Shaders e OBB e compare também com o horário da partida.\033[0m\n";
echo "\n";
echo "\033[1;31m[!] O arquivo 'unity.ver' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\033[0m\n";
echo "\033[1;31m[!] O arquivo 'apk.ver' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\033[0m\n";
echo "\033[1;31m[!] A pasta 'Metadata' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\033[0m\n";
echo "\033[1m[+] Verifique se a data de modificação da pasta Metadata bate exatamente com a data dos arquivos apk.ver e unity.ver, caso estejam diferentes, aplique o W.O!...\033[0m\n";
echo "\n";
echo "\n";
echo "\n";
echo "\033[1m         Obrigado por compactuar por um cenário limpo de cheats.\033[0m\n";
echo "\033[1m                         Com carinho, Keller...\033[0m\n";

while (true) {
    echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n"; // Adiciona duas quebras de linha antes do prompt
    echo "\033[1;32mKellerSS-Android/KellerSS-Android\033[0m"; // Nome em verde
    echo " \033[1;37m$\033[0m "; // "$" em branco
    $comando = trim(fgets(STDIN)); // Captura o comando digitado pelo usuário

    if ($comando === "exit") { // Se o usuário digitar "exit", o script para
        echo "Saindo...\n";
        break;
    }

    system($comando); // Executa o comando digitado pelo usuário
}
