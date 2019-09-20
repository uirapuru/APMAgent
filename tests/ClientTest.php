<?php

namespace Test;

use APMAgent\Agent;
use APMAgent\Factory\EventFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Component\HttpClient\HttpClient;

class ClientTest extends TestCase
{
    public function test() {
        $agent = new Agent(HttpClient::create([
            "base_uri" => 'https://41612342f6934b8b8d649c9051dcb5a7.apm.eu-central-1.aws.cloud.es.io:443',
            "headers" => [
                "Accept" =>         'application/json',
                "Content-Type" =>   'application/x-ndjson',
                "User-Agent" =>     'elastica/apm-php',
                "Authorization" =>  'Bearer nrwUR4qlMkYEZlMU4Y',
                "http_version" => '1.0',
                "timeout" => 30,
            ]
        ]));

        $json = <<<JSON
{"metadata": {"user": {"id": "123", "email": "s@test.com", "username": "john"}, "process": {"ppid": 6789, "pid": 1234,"argv": ["node", "server.js"], "title": "node"}, "system": {"platform": "darwin", "hostname": "prod1.example.com", "architecture": "x64", "container": {"id": "container-id"}, "kubernetes": {"namespace": "namespace1", "pod": {"uid": "pod-uid", "name": "pod-name"}, "node": {"name": "node-name"}}}, "service": {"name": "backendspans", "language": {"version": "8", "name": "ecmascript"}, "agent": {"version": "3.14.0", "name": "elastic-node"}, "environment": "staging", "framework": {"version": "1.2.3", "name": "Express"}, "version": "5.1.3", "runtime": {"version": "8.0.0", "name": "node"}}}}
{"span": {"trace_id": "fdedef0123456789abcdef9876543210", "parent_id": "abcdef0123456789", "id": "abcdef01234567", "transaction_id": "01af25874dec69dd", "name": "GET /api/types", "type": "db.postgresql.query.custom","start": 0, "duration": 141.581, "timestamp": 1532976822281000}}
{"span": {"trace_id": "abcdef0123456789abcdef9876543210", "parent_id": "0000000011111111", "id": "1234abcdef567895", "transaction_id": "ab45781d265894fe", "name": "GET /api/types", "type": "request", "start": 22, "duration": 32.592981, "timestamp": 1532976822281000,"context":{"service":{"environment":"prod","agent":{}}}}}
{"span": {"trace_id": "abcdef0123456789abcdef9876543210", "parent_id": "abcdefabcdef7890", "id": "0123456a89012345", "transaction_id": "ab23456a89012345", "name": "GET /api/types", "type": "request.http", "start": 1.845, "duration": 3.5642981, "stacktrace": [], "context":{"tags": {"tag1": "value1", "tag2": 123, "tag3": 12.34, "tag4": true, "tag5": null},"service":{}}}}
{"span": {"trace_id": "abcdef0123456789abcdef9876543210", "parent_id": "ababcdcdefefabde", "id": "abcde56a89012345", "transaction_id": null, "name": "get /api/types",  "sync": false, "type": "request", "subtype": "http", "action": "call", "start": 0, "duration": 13.9802981, "stacktrace": null, "context": null }}
{"span": {"trace_id": "abcdef0123456789abcdef9876543210", "parent_id": "abcdef0123456789", "id": "1234567890aaaade", "sync": true, "name": "SELECT FROM product_types", "type": "db.postgresql.query", "start": 2.83092, "duration": 3.781912, "stacktrace": [{ "filename": "net.js", "lineno": 547},{"filename": "file2.js", "lineno": 12, "post_context": [ "    ins.currentTransaction = prev", "}"]}, { "function": "onread", "abs_path": "net.js", "filename": "net.js", "lineno": 547, "library_frame": true, "vars": { "key": "value" }, "module": "some module", "colno": 4, "context_line": "line3", "pre_context": [ "  var trans = this.currentTransaction", "" ], "post_context": [ "    ins.currentTransaction = prev", "    return result"] }], "context": { "db": { "instance": "customers", "statement": "SELECT * FROM product_types WHERE user_id=?", "type": "sql", "user": "readonly_user", "link": "other.db.com" }, "http": { "url": "http://localhost:8000", "status_code": 200, "method": "GET" },"service":{"name":"service1","agent":{"version":"2.2","name":"elastic-ruby", "ephemeral_id": "justanid"}}}}}
JSON;
        $events = EventFactory::fromJson($json);

        $agent->push($events);

        try {
            $agent->commit();
        } catch (ClientException $e) {
            die(var_dump($e->getResponse()));
        }
    }
}