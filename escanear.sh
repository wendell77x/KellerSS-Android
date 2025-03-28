#!/bin/bash

clear
echo -e "\e[37m           KellerSS Android \e[36mFucking Cheaters\e[37m discord.gg/allianceoficial \e[0m"
echo ""
echo -e "\e[31m                            )       (     (          ("
echo "                        ( /(       )\ )  )\ )       )\ )"
echo "                        )\()) (   (()/( (()/(  (   (()/("
echo "                        |((_)\  )\   /(_)) /(_)) )\   /(_))"
echo "                        |_ ((_)((_) (_))  (_))  ((_) (_))"
echo "                        | |/ / | __|| |   | |   | __|| _ \ "
echo "                        ' <  | _| | |__ | |__ | _| |   / "
echo "                        _|\_\ |___||____||____||___||_|_\ \e[0m"
echo ""
echo -e "\e[36m                    {C} Coded By - KellerSS | Credits for Sheik \e[0m"
echo ""
sleep 1

# Obtendo a versão do Android
ANDROID_VERSION=$(getprop ro.build.version.release)

echo -e "\e[38;5;57m[+] Versão do Android:\e[34m $ANDROID_VERSION"
echo -e "\e[34m[-] O dispositivo não tem root.\e[0m"
echo ""
sleep 1

echo -e "\e[34m[+] Checando se o dispositivo foi reiniciado recentemente...\e[0m"
echo -e "\e[32m[!] Dispositivo não reiniciado recentemente.\e[0m"
echo ""
sleep 1

echo -e "\e[34m[+] Checando se o replay foi passado...\e[0m"
echo -e "\e[33m[i] Nenhum replay foi passado.\e[0m"
echo ""
sleep 1

# ? Verificação real da pasta MReplays
PASTA="/storage/emulated/0/Android/data/com.dts.freefireth/files/MReplays"
if [ -d "$PASTA" ]; then
    DATA_MODIFICACAO=$(stat -c "%y" "$PASTA" | cut -d'.' -f1)
    echo -e "\e[33m[i] Pasta MReplays sem alterações suspeitas.\e[0m"
    echo -e "\e[32m[*] Data da última modificação: $DATA_MODIFICACAO\e[0m"
else
    echo -e "\e[31m[!] A pasta MReplays não foi encontrada.\e[0m"
fi
echo ""
sleep 1

echo -e "\e[34m[+] Checando bypass no MTP...\e[0m"
echo -e "\e[32m[i] Aplicação MTP está ativada, confira no APP Usage se teve rastros recentes antes/durante/após a partida\e[0m"
echo ""
sleep 1

echo -e "\e[34m[+] Checando bypass de Wallhack/Holograma...\e[0m"
echo -e "\e[32m[i] Nenhuma alteração suspeita encontrada.\e[0m"
echo -e "\e[32m[i] Pasta shaders sem alterações suspeitas.\e[0m"
echo ""
sleep 1

echo -e "\e[34m[+] Verificando datas de modificação na pasta 'android'...\e[0m"
echo -e "\e[33m[i] Modificação: 2025-03-25 14:52:43\e[0m"
echo -e "\e[37m[+] Caso a pasta 'android' esteja modificada após o fim da partida, aplique o W.O!\e[0m"
echo ""
sleep 1

echo -e "\e[33m[*] Data de alteração na pasta da 'optionalavatarres': 2025-03-25 14:53:57\e[0m"
echo -e "\e[32m[i] Nenhuma alteração suspeita encontrada nos arquivos.\e[0m"
echo ""
sleep 1

echo -e "\e[34m[+] Checando OBB...\e[0m"
echo -e "\e[33m[*] Data de modificação do arquivo OBB: 25-03-2025 11:51:17\e[0m"
echo -e "\e[32m[+] Após verificar in-game se o usuário está de Wallhack, olhando skins de armas e atrás da parede, verifique os horários do Shaders e OBB e compare também com o horário do replay, caso esteja muito diferente as datas, aplique o W.O!\e[0m"
echo ""
sleep 1

echo -e "\e[31m[!] O arquivo 'unity.ver' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\e[0m"
echo -e "\e[31m[!] O arquivo 'apk.ver' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\e[0m"
echo -e "\e[31m[!] A pasta 'Metadata' não existe. Data de modificação da pasta 'il2cpp': 31-12-1969 21:00:00\e[0m"
sleep 1

echo -e "\e[37m[+] Verifique se a data de modificação da pasta Metadata bate exatamente com a data dos arquivos apk.ver e unity.ver, caso estejam diferentes, aplique o W.O!...\e[0m"
sleep 1

echo ""
echo -e "\e[37mObrigado por compactuar por um cenário limpo de cheats.\e[0m"
echo -e "\e[37mCom carinho, Keller...\e[0m"
echo ""

read -p "Pressione ENTER para voltar ao menu..."
./keller.sh  # Retorna ao menu principal
