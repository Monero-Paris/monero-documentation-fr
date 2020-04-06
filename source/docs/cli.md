---
title: Command Line Interface
description: command Line Interface
extends: _layouts.documentation
section: content
---

# Command Line Interface

Dans le répertoire de l'application, il y a plusieurs fichiers binaires:

* monero-blockchain-ancestry.exe
* monero-blockchain-depth.exe
* monero-blockchain-export.exe
* monero-blockchain-import.exe
* monero-blockchain-mark-spent-outputs.exe
* monero-blockchain-prune-known-spent-data.exe
* monero-blockchain-prune.exe
* monero-blockchain-stats.exe
* monero-blockchain-usage.exe
* monero-daemon.bat
* monero-gen-trusted-multisig.exe
* ***monero-wallet-cli.exe***
* monero-wallet-rpc.exe
* ***monerod.exe***

## monerod

Le daemon chargé de télécharger la blockchain en tache de fond.

```bash
monderod --help
```

```bash
PS C:\Program Files\Monero GUI Wallet> .\monerod.exe --help
Monero 'Carbon Chamaeleon' (v0.15.0.1-release)

Usage: C:\Program Files\Monero GUI Wallet\monerod.exe [options|settings] [daemon_command...]

Options:
  --help                                Produce help message
  --version                             Output version information
  --os-version                          OS for which this executable was
                                        compiled
  --config-file arg (=C:\Users\toto\AppData\Roaming\bitmonero\bitmonero.conf, C:\Users\toto\AppData\Roaming\bitmonero\testnet\bitmonero.conf if 'testnet', C:\Users\toto\AppData\Roaming\bitmonero\stagenet\bitmo
nero.conf if 'stagenet')
                                        Specify configuration file
  --install-service                     Install Windows service
  --uninstall-service                   Uninstall Windows service
  --start-service                       Start Windows service
  --stop-service                        Stop Windows service

Settings:
  --log-file arg (=C:\Users\toto\AppData\Roaming\bitmonero\bitmonero.log, C:\Users\toto\AppData\Roaming\bitmonero\testnet\bitmonero.log if 'testnet', C:\Users\toto\AppData\Roaming\bitmonero\stagenet\bitmonero.
log if 'stagenet')
                                        Specify log file
  --log-level arg
  --max-log-file-size arg (=104850000)  Specify maximum log file size [B]
  --max-log-files arg (=50)             Specify maximum number of rotated log
                                        files to be saved (no limit by setting
                                        to 0)
  --max-concurrency arg (=0)            Max number of threads to use for a
                                        parallel job
  --public-node                         Allow other users to use the node as a
                                        remote (restricted RPC mode, view-only
                                        commands) and advertise it over P2P
  --zmq-rpc-bind-ip arg (=127.0.0.1)    IP for ZMQ RPC server to listen on
  --zmq-rpc-bind-port arg (=18082, 28082 if 'testnet', 38082 if 'stagenet')
                                        Port for ZMQ RPC server to listen on
  --no-zmq                              Disable ZMQ RPC server
  --data-dir arg (=C:\ProgramData\bitmonero, C:\ProgramData\bitmonero\testnet if 'testnet', C:\ProgramData\bitmonero\stagenet if 'stagenet')
                                        Specify data directory
  --test-drop-download                  For net tests: in download, discard ALL
                                        blocks instead checking/saving them
                                        (very fast)
  --test-drop-download-height arg (=0)  Like test-drop-download but discards
                                        only after around certain height
  --testnet                             Run on testnet. The wallet must be
                                        launched with --testnet flag.
  --stagenet                            Run on stagenet. The wallet must be
                                        launched with --stagenet flag.
  --regtest                             Run in a regression testing mode.
  --fixed-difficulty arg (=0)           Fixed difficulty used for testing.
  --enforce-dns-checkpointing           checkpoints from DNS server will be
                                        enforced
  --prep-blocks-threads arg (=4)        Max number of threads to use when
                                        preparing block hashes in groups.
  --fast-block-sync arg (=1)            Sync up most of the way by using
                                        embedded, known block hashes.
  --show-time-stats arg (=0)            Show time-stats when processing
                                        blocks/txs and disk synchronization.
  --block-sync-size arg (=0)            How many blocks to sync at once during
                                        chain synchronization (0 = adaptive).
  --check-updates arg (=notify)         Check for new versions of monero:
                                        [disabled|notify|download|update]
  --fluffy-blocks                       Relay blocks as fluffy blocks
                                        (obsolete, now default)
  --no-fluffy-blocks                    Relay blocks as normal blocks
  --test-dbg-lock-sleep arg (=0)        Sleep time in ms, defaults to 0 (off),
                                        used to debug before/after locking
                                        mutex. Values 100 to 1000 are good for
                                        tests.
  --offline                             Do not listen for peers, nor connect to
                                        any
  --disable-dns-checkpoints             Do not retrieve checkpoints from DNS
  --block-download-max-size arg (=0)    Set maximum size of block download
                                        queue in bytes (0 for default)
  --sync-pruned-blocks                  Allow syncing from nodes with only
                                        pruned blocks
  --max-txpool-weight arg (=648000000)  Set maximum txpool weight in bytes.
  --pad-transactions                    Pad relayed transactions to help defend
                                        against traffic volume analysis
  --block-notify arg                    Run a program for each new block, '%s'
                                        will be replaced by the block hash
  --prune-blockchain                    Prune blockchain
  --reorg-notify arg                    Run a program for each reorg, '%s' will
                                        be replaced by the split height, '%h'
                                        will be replaced by the new blockchain
                                        height, '%n' will be replaced by the
                                        number of new blocks in the new chain,
                                        and '%d' will be replaced by the number
                                        of blocks discarded from the old chain
  --block-rate-notify arg               Run a program when the block rate
                                        undergoes large fluctuations. This
                                        might be a sign of large amounts of
                                        hash rate going on and off the Monero
                                        network, and thus be of potential
                                        interest in predicting attacks. %t will
                                        be replaced by the number of minutes
                                        for the observation window, %b by the
                                        number of blocks observed within that
                                        window, and %e by the number of blocks
                                        that was expected in that window. It is
                                        suggested that this notification is
                                        used to automatically increase the
                                        number of confirmations required before
                                        a payment is acted upon.
  --keep-alt-blocks                     Keep alternative blocks on restart
  --extra-messages-file arg             Specify file for extra messages to
                                        include into coinbase transactions
  --start-mining arg                    Specify wallet address to mining for
  --mining-threads arg                  Specify mining threads count
  --bg-mining-enable                    enable background mining
  --bg-mining-ignore-battery            if true, assumes plugged in when unable
                                        to query system power status
  --bg-mining-min-idle-interval arg     Specify min lookback interval in
                                        seconds for determining idle state
  --bg-mining-idle-threshold arg        Specify minimum avg idle percentage
                                        over lookback interval
  --bg-mining-miner-target arg          Specify maximum percentage cpu use by
                                        miner(s)
  --db-sync-mode arg (=fast:async:250000000bytes)
                                        Specify sync option, using format
                                        [safe|fast|fastest]:[sync|async]:[<nblo
                                        cks_per_sync>[blocks]|<nbytes_per_sync>
                                        [bytes]].
  --db-salvage                          Try to salvage a blockchain database if
                                        it seems corrupted
  --p2p-bind-ip arg (=0.0.0.0)          Interface for p2p network protocol
                                        (IPv4)
  --p2p-bind-ipv6-address arg (=::)     Interface for p2p network protocol
                                        (IPv6)
  --p2p-bind-port arg (=18080, 28080 if 'testnet', 38080 if 'stagenet')
                                        Port for p2p network protocol (IPv4)
  --p2p-bind-port-ipv6 arg (=18080, 28080 if 'testnet', 38080 if 'stagenet')
                                        Port for p2p network protocol (IPv6)
  --p2p-use-ipv6                        Enable IPv6 for p2p
  --p2p-ignore-ipv4                     Ignore unsuccessful IPv4 bind for p2p
  --p2p-external-port arg (=0)          External port for p2p network protocol
                                        (if port forwarding used with NAT)
  --allow-local-ip                      Allow local ip add to peer list, mostly
                                        in debug purposes
  --add-peer arg                        Manually add peer to local peerlist
  --add-priority-node arg               Specify list of peers to connect to and
                                        attempt to keep the connection open
  --add-exclusive-node arg              Specify list of peers to connect to
                                        only. If this option is given the
                                        options add-priority-node and seed-node
                                        are ignored
  --seed-node arg                       Connect to a node to retrieve peer
                                        addresses, and disconnect
  --tx-proxy arg                        Send local txes through proxy:
                                        <network-type>,<socks-ip:port>[,max_con
                                        nections][,disable_noise] i.e.
                                        "tor,127.0.0.1:9050,100,disable_noise"
  --anonymous-inbound arg               <hidden-service-address>,<[bind-ip:]por
                                        t>[,max_connections] i.e.
                                        "x.onion,127.0.0.1:18083,100"
  --hide-my-port                        Do not announce yourself as peerlist
                                        candidate
  --no-sync                             Don't synchronize the blockchain with
                                        other peers
  --no-igd                              Disable UPnP port mapping
  --igd arg (=delayed)                  UPnP port mapping (disabled, enabled,
                                        delayed)
  --out-peers arg (=-1)                 set max number of out peers
  --in-peers arg (=-1)                  set max number of in peers
  --tos-flag arg (=-1)                  set TOS flag
  --limit-rate-up arg (=2048)           set limit-rate-up [kB/s]
  --limit-rate-down arg (=8192)         set limit-rate-down [kB/s]
  --limit-rate arg (=-1)                set limit-rate [kB/s]
  --rpc-bind-port arg (=18081, 28081 if 'testnet', 38081 if 'stagenet')
                                        Port for RPC server
  --rpc-restricted-bind-port arg        Port for restricted RPC server
  --restricted-rpc                      Restrict RPC to view only commands and
                                        do not return privacy sensitive data in
                                        RPC calls
  --bootstrap-daemon-address arg        URL of a 'bootstrap' remote daemon that
                                        the connected wallets can use while
                                        this daemon is still not fully synced.
                                        Use 'auto' to enable automatic public
                                        nodes discovering and bootstrap daemon
                                        switching
  --bootstrap-daemon-login arg          Specify username:password for the
                                        bootstrap daemon login
  --rpc-bind-ip arg (=127.0.0.1)        Specify IP to bind RPC server
  --rpc-bind-ipv6-address arg (=::1)    Specify IPv6 address to bind RPC server
  --rpc-use-ipv6                        Allow IPv6 for RPC
  --rpc-ignore-ipv4                     Ignore unsuccessful IPv4 bind for RPC
  --rpc-login arg                       Specify username[:password] required
                                        for RPC server
  --confirm-external-bind               Confirm rpc-bind-ip value is NOT a
                                        loopback (local) IP
  --rpc-access-control-origins arg      Specify a comma separated list of
                                        origins to allow cross origin resource
                                        sharing
  --rpc-ssl arg (=autodetect)           Enable SSL on RPC connections:
                                        enabled|disabled|autodetect
  --rpc-ssl-private-key arg             Path to a PEM format private key
  --rpc-ssl-certificate arg             Path to a PEM format certificate
  --rpc-ssl-ca-certificates arg         Path to file containing concatenated
                                        PEM format certificate(s) to replace
                                        system CA(s).
  --rpc-ssl-allowed-fingerprints arg    List of certificate fingerprints to
                                        allow
  --rpc-ssl-allow-chained               Allow user (via --rpc-ssl-certificates)
                                        chain certificates
  --rpc-ssl-allow-any-cert              Allow any peer certificate
  --rpc-payment-address arg             Restrict RPC to clients sending
                                        micropayment to this address
  --rpc-payment-difficulty arg (=1000)  Restrict RPC to clients sending
                                        micropayment at this difficulty
  --rpc-payment-credits arg (=100)      Restrict RPC to clients sending
                                        micropayment, yields that many credits
                                        per payment

```

De très nombreuses options sont disponibles: séléction du réseau mainnet testnet ou stagenet, configuration du <a href="https://fr.wikipedia.org/wiki/Remote_procedure_call" target="_blank">RPC</a>, connexion à un noeud caché sur TOR etc etc...  

## monero-wallet-cli

Le programme en charge d'interagir avec le daeomon.


<!-- 
avouer gaver verdict ruse snob cloner reposer rincer orageurx lequel affirmer dehors banlieue main bannir avril brader genre bilan semis ortie salon confier dame dehors
 -->

```bash
C:\Program Files\Monero GUI Wallet                                                                                                                                                                                                 
λ monero-wallet-cli.exe --help                                                                                                                                                                                                     
Monero 'Carbon Chamaeleon' (v0.15.0.1-release)                                                                                                                                                                                     
                                                                                                                                                                                                                                   
Ceci est le portefeuille monero en ligne de commande. Il a besoin de se                                                                                                                                                            
connecter Ã  un dÃ©mon monero pour fonctionner correctement.                                                                                                                                                                       
                                                                                                                                                                                                                                   
UsageÂ :                                                                                                                                                                                                                           
  monero-wallet-cli [--wallet-file=<filename>|--generate-new-wallet=<filename>] [<COMMAND>]                                                                                                                                        
                                                                                                                                                                                                                                   
General options:                                                                                                                                                                                                                   
  --help                                Produce help message                                                                                                                                                                       
  --version                             Output version information                                                                                                                                                                 
                                                                                                                                                                                                                                   
Wallet options:                                                                                                                                                                                                                    
  --daemon-address arg                  Use daemon instance at <host>:<port>                                                                                                                                                       
  --daemon-host arg                     Use daemon instance at host <arg>                                                                                                                                                          
                                        instead of localhost                                                                                                                                                                       
  --proxy arg                           [<ip>:]<port> socks proxy to use for                                                                                                                                                       
                                        daemon connections                                                                                                                                                                         
  --trusted-daemon                      Enable commands which rely on a trusted                                                                                                                                                    
                                        daemon                                                                                                                                                                                     
  --untrusted-daemon                    Disable commands which rely on a                                                                                                                                                           
                                        trusted daemon                                                                                                                                                                             
  --password arg                        Wallet password (escape/quote as                                                                                                                                                           
                                        needed)                                                                                                                                                                                    
  --password-file arg                   Wallet password file                                                                                                                                                                       
  --daemon-port arg (=0)                Use daemon instance at port <arg>                                                                                                                                                          
                                        instead of 18081                                                                                                                                                                           
  --daemon-login arg                    Specify username[:password] for daemon                                                                                                                                                     
                                        RPC client                                                                                                                                                                                 
  --daemon-ssl arg (=autodetect)        Enable SSL on daemon RPC connections:                                                                                                                                                      
                                        enabled|disabled|autodetect                                                                                                                                                                
  --daemon-ssl-private-key arg          Path to a PEM format private key                                                                                                                                                           
  --daemon-ssl-certificate arg          Path to a PEM format certificate                                                                                                                                                           
  --daemon-ssl-ca-certificates arg      Path to file containing concatenated                                                                                                                                                       
                                        PEM format certificate(s) to replace                                                                                                                                                       
                                        system CA(s).                                                                                                                                                                              
  --daemon-ssl-allowed-fingerprints arg List of valid fingerprints of allowed                                                                                                                                                      
                                        RPC servers                                                                                                                                                                                
  --daemon-ssl-allow-any-cert           Allow any SSL certificate from the                                                                                                                                                         
                                        daemon                                                                                                                                                                                     
  --daemon-ssl-allow-chained            Allow user (via --daemon-ssl-ca-certifi                                                                                                                                                    
                                        cates) chain certificates                                                                                                                                                                  
  --testnet                             For testnet. Daemon must also be                                                                                                                                                           
                                        launched with --testnet flag                                                                                                                                                               
  --stagenet                            For stagenet. Daemon must also be                                                                                                                                                          
                                        launched with --stagenet flag                                                                                                                                                              
  --shared-ringdb-dir arg (=C:\ProgramData\.shared-ringdb, C:\ProgramData\.shared-ringdb\testnet if 'testnet', C:\ProgramData\.shared-ringdb\stagenet if 'stagenet')                                                               
                                        Set shared ring database path                                                                                                                                                              
  --kdf-rounds arg (=1)                 Number of rounds for the key derivation                                                                                                                                                    
                                        function                                                                                                                                                                                   
  --bitmessage-address arg (=http://localhost:8442/)                                                                                                                                                                               
                                        Use PyBitmessage instance at URL <arg>                                                                                                                                                     
  --bitmessage-login arg (=username:password)                                                                                                                                                                                      
                                        Specify <arg> as username:password for                                                                                                                                                     
                                        PyBitmessage API                                                                                                                                                                           
  --hw-device arg                       HW device to use                                                                                                                                                                           
  --hw-device-deriv-path arg            HW device wallet derivation path (e.g.,                                                                                                                                                    
                                        SLIP-10)                                                                                                                                                                                   
  --tx-notify arg                       Run a program for each new incoming                                                                                                                                                        
                                        transaction, '%s' will be replaced by                                                                                                                                                      
                                        the transaction hash                                                                                                                                                                       
  --no-dns                              Do not use DNS                                                                                                                                                                             
  --offline                             Do not connect to a daemon, nor use DNS                                                                                                                                                    
  --extra-entropy arg                   File containing extra entropy to                                                                                                                                                           
                                        initialize the PRNG (any data, aim for                                                                                                                                                     
                                        256 bits of entropy to be useful, wihch                                                                                                                                                    
                                        typically means more than 256 bits of                                                                                                                                                      
                                        data)                                                                                                                                                                                      
  --wallet-file arg                     Use wallet <arg>                                                                                                                                                                           
  --generate-new-wallet arg             Generate new wallet and save it to                                                                                                                                                         
                                        <arg>                                                                                                                                                                                      
  --generate-from-device arg            Generate new wallet from device and                                                                                                                                                        
                                        save it to <arg>                                                                                                                                                                           
  --generate-from-view-key arg          Generate incoming-only wallet from view                                                                                                                                                    
                                        key                                                                                                                                                                                        
  --generate-from-spend-key arg         Generate deterministic wallet from                                                                                                                                                         
                                        spend key                                                                                                                                                                                  
  --generate-from-keys arg              Generate wallet from private keys                                                                                                                                                          
  --generate-from-multisig-keys arg     Generate a master wallet from multisig                                                                                                                                                     
                                        wallet keys                                                                                                                                                                                
  --generate-from-json arg              Generate wallet from JSON format file                                                                                                                                                      
  --mnemonic-language arg               Language for mnemonic                                                                                                                                                                      
  --command arg                                                                                                                                                                                                                    
  --restore-deterministic-wallet        Recover wallet using Electrum-style                                                                                                                                                        
                                        mnemonic seed                                                                                                                                                                              
  --restore-from-seed                   alias for --restore-deterministic-walle                                                                                                                                                    
                                        t                                                                                                                                                                                          
  --restore-multisig-wallet             Recover multisig wallet using                                                                                                                                                              
                                        Electrum-style mnemonic seed                                                                                                                                                               
  --non-deterministic                   Generate non-deterministic view and                                                                                                                                                        
                                        spend keys                                                                                                                                                                                 
  --electrum-seed arg                   Specify Electrum seed for wallet                                                                                                                                                           
                                        recovery/creation                                                                                                                                                                          
  --allow-mismatched-daemon-version     Allow communicating with a daemon that                                                                                                                                                     
                                        uses a different RPC version                                                                                                                                                               
  --restore-height arg (=0)             Restore from specific blockchain height                                                                                                                                                    
  --restore-date arg                    Restore from estimated blockchain                                                                                                                                                          
                                        height on specified date                                                                                                                                                                   
  --do-not-relay                        The newly created transaction will not                                                                                                                                                     
                                        be relayed to the monero network                                                                                                                                                           
  --create-address-file                 Create an address file for new wallets                                                                                                                                                     
  --subaddress-lookahead arg            Set subaddress lookahead sizes to                                                                                                                                                          
                                        <major>:<minor>                                                                                                                                                                            
  --use-english-language-names          Display English language names                                                                                                                                                             
  --rpc-client-secret-key arg           Set RPC client secret key for RPC                                                                                                                                                          
                                        payments                                                                                                                                                                                   
  --log-file arg                        Specify log file                                                                                                                                                                           
  --log-level arg                       0-4 or categories                                                                                                                                                                          
  --max-log-file-size arg (=104 850 000)                                                                                                                                                                                           
                                        Specify maximum log file size [B]                                                                                                                                                          
  --max-log-files arg (=50)             Specify maximum number of rotated log                                                                                                                                                      
                                        files to be saved (no limit by setting                                                                                                                                                     
                                        to 0)                                                                                                                                                                                      
  --max-concurrency arg (=0)            Max number of threads to use for a                                                                                                                                                         
                                        parallel job                                                                                                                                                                               
  --config-file arg                     Config file                                                                                                                                                                             

```

Pour restaurer un wallet à partir du seed: 

```bash
monero-wallet-cli --restore-from-seed
```

Une fois le wallet synchronisé: help

```bash
help
CommandesÂ :
  account
    account new <label text with white spaces allowed>
    account switch <index>
    account label <index> <label text with white spaces allowed>
    account tag <tag_name> <account_index_1> [<account_index_2> ...]
    account untag <account_index_1> [<account_index_2> ...]
    account tag_description <tag_name> <description>
  address [ new <label text with white spaces allowed> | all | <index_min> [<index_max>] | label <index> <label text with white spaces allowed> | device [<index>]]
  address_book [(add ((<address> [pid <id>])|<integrated address>) [<description possibly with whitespaces>])|(delete <index>)]
  balance [detail]
  bc_height
  check_reserve_proof <address> <signature_file> [<message>]
  check_spend_proof <txid> <signature_file> [<message>]
  check_tx_key <txid> <txkey> <address>
  check_tx_proof <txid> <address> <signature_file> [<message>]
  donate [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] <amount> [<payment_id (obsolete)>]
  encrypted_seed
  exchange_multisig_keys <string> [<string>...]
  export_key_images [all] <filename>
  export_multisig_info <filename>
  export_outputs [all] <filename>
  export_raw_multisig_tx <filename>
  export_transfers [in|out|all|pending|failed|coinbase] [index=<N1>[,<N2>,...]] [<hauteur_min> [<hauteur_max>]] [output=<chemin_de_fichier>]
  fee
  finalize_multisig <string> [<string>...]
  freeze <key_image>
  frozen <key_image>
  get_description
  get_reserve_proof (all|<amount>) [<message>]
  get_spend_proof <txid> [<message>]
  get_tx_key <txid>
  get_tx_note <txid>
  get_tx_proof <txid> <address> [<message>]
  help [<command>]
  hw_key_images_sync
  hw_reconnect
  import_key_images <filename>
  import_multisig_info <filename> [<filename>...]
  import_outputs <filename>
  incoming_transfers [available|unavailable] [verbose] [uses] [index=<N1>[,<N2>[,...]]]
  integrated_address [device] [<payment_id> | <address>]
  is_output_spent <amount>/<offset>
  lock
  locked_sweep_all [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] <address> <lockblocks> [<payment_id (obsolete)>]
  locked_transfer [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] (<URI> | <addr> <amount>) <lockblocks> [<payment_id (obsolete)>]
  make_multisig <threshold> <string1> [<string>...]
  mark_output_spent <amount>/<offset> | <filename> [add]
  mark_output_unspent <amount>/<offset>
  mms [<subcommand> [<subcommand_parameters>]]
  mms auto_config <auto_config_token>
  mms delete (<message_id> | all)
  mms export <message_id>
  mms info
  mms init <required_signers>/<authorized_signers> <own_label> <own_transport_address>
  mms list
  mms next [sync]
  mms note [<label> <text>]
  mms receive
  mms send [<message_id>]
  mms send_signer_config
  mms set <option_name> [<option_value>]
  mms show <message_id>
  mms signer [<nombre> <Ã©tiquette> [<adresse_de_transport> [<adresse_monero>]]]
  mms start_auto_config [<label> <label> ...]
  mms stop_auto_config
  mms sync
  mms transfer <transfer_command_arguments>
  net_stats
  password
  payment_id
  payments <PID_1> [<PID_2> ... <PID_N>]
  prepare_multisig
  print_ring <key_image> | <txid>
  public_nodes
  refresh
  rescan_bc [hard|soft|keep_ki] [start_height=0]
  rescan_spent
  restore_height
  rpc_payment_info
  save
  save_bc
  save_known_rings
  save_watch_only
  seed
  set <option> [<value>]
  set_daemon <host>[:<port>] [trusted|untrusted]
  set_description [free text note]
  set_log <level>|{+,-,}<categories>
  set_ring <filename> | ( <key_image> absolute|relative <index> [<index>...] )
  set_tx_key <txid> <tx_key>
  set_tx_note <txid> [free text note]
  show_transfer <txid>
  show_transfers [in|out|pending|failed|pool|coinbase] [index=<N1>[,<N2>,...]] [<min_height> [<max_height>]]
  sign <filename>
  sign_multisig <filename>
  sign_transfer [export_raw]
  spendkey
  start_mining [<number_of_threads>] [bg_mining] [ignore_battery]
  start_mining_for_rpc
  status
  stop_mining
  stop_mining_for_rpc
  submit_multisig <filename>
  submit_transfer
  sweep_all [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] [outputs=<N>] <address> [<payment_id (obsolete)>]
  sweep_below <amount_threshold> [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] <address> [<payment_id (obsolete)>]
  sweep_single [<priority>] [<ring_size>] [outputs=<N>] <key_image> <address> [<payment_id (obsolete)>]
  sweep_unmixable
  thaw <key_image>
  transfer [index=<N1>[,<N2>,...]] [<priority>] [<ring_size>] (<URI> | <address> <amount>) [<payment_id>]
  unset_ring <txid> | ( <key_image> [<key_image>...] )
  unspent_outputs [index=<N1>[,<N2>,...]] [<min_amount> [<max_amount>]]
  verify <filename> <address> <signature>
  version
  viewkey
  wallet_info
  welcome
```

Toutes les actions du GUI sont disponibles en ligne de commande.